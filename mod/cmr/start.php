<?php

require_once(dirname(__FILE__) . "/lib/events.php");
require_once(dirname(__FILE__) . "/lib/hooks.php");

// Default event handlers
elgg_register_event_handler('init', 'system', 'cmr_init');
elgg_register_event_handler("pagesetup", "system", "cmr_pagesetup");

function cmr_init() {
	// Extend css
	elgg_extend_view("css/elgg", "css/friend_request/site");

	// Actions
	$actions = dirname(__FILE__) . '/actions';
	// A client establishes c2b relationship with a business.
	elgg_register_action('c2b_establish', "$actions/c2b_establish.php");
	// A client revokes c2b relationship that she had previously established with a business.
	elgg_register_action('c2b_revoke', "$actions/c2b_revoke.php");
	// A business drops c2b relationship that a client had been previously established with the business.
	elgg_register_action('c2b_drop', "$actions/c2b_drop.php");
	// A client establishes flw relationship with a client or a business.
	elgg_register_action('flw_establish', "$actions/flw_establish.php");
	// A client revokes flw relationship that she had previously established with a client or a business.
	elgg_register_action('flw_revoke', "$actions/flw_revoke.php");
	// A client or a business drops flw relationship that a client had been previously established with them.
	elgg_register_action('flw_drop', "$actions/flw_drop.php");
	// Overriding Elgg's default 'friends/add' action: A client adds a client as friend. The objective is to
	// establish a two-way friendship. However, the establishment of a two-way friendship is subject to approval
	// from the other client.
	elgg_register_action("friends/add", "$actions/friends/add.php");
	// Overriding Elgg's default 'friends/remove' action: A client removes a two-way friendship with a client.
	elgg_register_action("friends/remove", "$actions/friends/removefriend.php");
	// A client approves a two-way friendship request previuosly submitted by another client.
	elgg_register_action('fr_approve', "$actions/fr_approve.php");
	// A client declines a request for a two-way friendship previuosly submitted by another client.
	elgg_register_action('fr_decline', "$actions/fr_decline.php");
	// A client revokes a request for a two-way friendship she previuosly submitted to another client.
	elgg_register_action('fr_revoke', "$actions/fr_revoke.php");

	// Events
	// Unregister default elgg friend handler
	elgg_unregister_event_handler("create", "friend", "relationship_notification_hook");
	// Handle our add action event
	elgg_register_event_handler("create", "friendrequest", "friend_request_event_create_friendrequest");

	// Plugin hooks
	elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'cmr_user_hover_menu');

	// Page handlers
	global $CONFIG, $original_activity_page_handler;
	$original_activity_page_handler = $CONFIG->pagehandler['activity'];
	// Special treatment for handling pages 'activity/service_providers' and 'activity/following'.
	elgg_register_page_handler('activity', 'cmr_activity_page_handler');
	// Unregister friendsof.
	elgg_unregister_page_handler("friendsof");
	// Handling page 'friend_request' where clients can view their friend requests.
	elgg_register_page_handler('friend_request', 'cmr_friend_request_page_handler');
	// Handling page 'following' where clients can view clients/businesses they follow.
	elgg_register_page_handler('following', 'cmr_following_page_handler');
	// Handling page 'followers' where clients/businesses can view their followers.
	elgg_register_page_handler('followers', 'cmr_followers_page_handler');
	// Handling page 'service_providers' where clients can view their service providers.
	elgg_register_page_handler('service_providers', 'cmr_service_providers_page_handler');
	// Handling page 'clients' where businesses can view their clients.
	elgg_register_page_handler('clients', 'cmr_clients_page_handler');

	// Adding widgets
	elgg_register_widget_type('following', elgg_echo('cmr:widgets:following:name'), elgg_echo('cmr:widgets:following:description'));
	elgg_register_widget_type('followers', elgg_echo('cmr:widgets:followers:name'), elgg_echo('cmr:widgets:followers:description'));
	elgg_register_widget_type('service_providers', elgg_echo('cmr:widgets:service_providers:name'), elgg_echo('cmr:widgets:service_providers:description'));
	elgg_register_widget_type('clients', elgg_echo('cmr:widgets:clients:name'), elgg_echo('cmr:widgets:clients:description'));
	// Note: On profile page,
	// -'Clients' widget is NOT showing as an option to a client to be added to the profile page.
	// -'Following' widget is NOT showing as an option to a business to be added to the profile page.
	// -'Service Providers' widget is NOT showing as an option to a business to be added to the profile page.
	// -'Friends' widget is NOT showing as an option to a business to be added to the profile page.

}

function cmr_activity_page_handler($segments, $handle) {
	switch ($segments[0]) {
		case 'service_providers':
			require_once dirname(__FILE__) . '/pages/activity/service_providers.php';
			return;
		default:
			global $original_activity_page_handler;
			return call_user_func($original_activity_page_handler, $segments, $handle);
	}
}

function cmr_friend_request_page_handler($page) {
	if (isset($page[0])){
		set_input("username", $page[0]);
	}
	include(dirname(__FILE__) . "/pages/friend_request.php");
	return true;
}

function cmr_followers_page_handler($page) {
	if (isset($page[0])){
		set_input("username", $page[0]);
	}
	include(dirname(__FILE__) . "/pages/followers.php");
	return true;
}

function cmr_following_page_handler($page) {
	if (isset($page[0])){
		set_input("username", $page[0]);
	}
	include(dirname(__FILE__) . "/pages/following.php");
	return true;
}

function cmr_service_providers_page_handler($page) {
	if (isset($page[0])){
		set_input("username", $page[0]);
	}
	include(dirname(__FILE__) . "/pages/service_providers.php");
	return true;
}

function cmr_clients_page_handler($page) {
	if (isset($page[0])){
		set_input("username", $page[0]);
	}
	include(dirname(__FILE__) . "/pages/clients.php");
	return true;
}

function cmr_pagesetup(){

	$context = elgg_get_context();
	$page_owner = elgg_get_page_owner_entity();

	$user = elgg_get_logged_in_user_entity();

	// For businesses,
	// Remove
	//     -'Friends' from page menu
	//     -'Friends' from topbar menu
	//     -'Friends of' from page menu
	//     -'Friends collections' from page menu
	//     -'Invite friends' from page menu
	// Add
	//     -'Clients' to topbar menu
	//     -'Followers' to topbar menu
	if ($user && elgg_instanceof($user, "user", "business_subtype")) {
		elgg_unregister_menu_item("page", "friends");
		elgg_unregister_menu_item("topbar", "friends");
		elgg_unregister_menu_item("page", "friends:of");
		elgg_unregister_menu_item("page", "friends:view:collections");
		elgg_unregister_menu_item("page", "invite");

		$menu_item = array(
				"name" => "followers",
				"text" => elgg_echo("cmr:followers:menu"),
				"href" => "followers/" . $page_owner->username,
				"priority" => 700,
		);
		elgg_register_menu_item("topbar", $menu_item);

		$menu_item = array(
				"name" => "clients",
				"text" => elgg_echo("cmr:clients:menu"),
				"href" => "clients/" . $page_owner->username,
				"priority" => 700,
		);
		elgg_register_menu_item("topbar", $menu_item);
	}

	// For clients,
	// Remove
	//     -'Friends of' from page menu
	// Add
	//     -'Friend Requests' to topbar menu if there is any outstanding friend request.
	//     -'Service Providers' to topbar menu
	//     -'Following' to topbar menu
	//     -'Followers' to topbar menu
	//     -'Service Providers' to activity filter
	//     -'Following' to activity filter
	if ($user && elgg_instanceof($user, "user", "client_subtype")){
		elgg_unregister_menu_item("page", "friends:of");

		$options = array(
				"type" => "user",
				"count" => true,
				"relationship" => "friendrequest",
				"relationship_guid" => $user->getGUID(),
				"inverse_relationship" => true
		);	
		if ($count = elgg_get_entities_from_relationship($options)){
			elgg_register_menu_item("topbar", array(
					"name" => "friend_request",
					"href" => "friend_request/" . $user->username,
					"text" => elgg_view_icon("user") . "<span class='friend-request-new'>" . $count . "</span>",
					"title" => elgg_echo("cmr:friend_request:menu"),
					"priority" => 301
			));
		}

		elgg_register_menu_item("topbar", array(
				"name" => "service_providers",
				"text" => elgg_echo("cmr:service_providers:menu"),
				"href" => "service_providers/" . $page_owner->username,
				"priority" => 700,
		));

		elgg_register_menu_item("topbar", array(
				"name" => "following",
				"text" => elgg_echo("cmr:following:menu"),
				"href" => "following/" . $page_owner->username,
				"priority" => 710,
		));

		elgg_register_menu_item("topbar", array(
				"name" => "followers",
				"text" => elgg_echo("cmr:followers:menu"),
				"href" => "followers/" . $page_owner->username,
				"priority" => 710,
		));
		
		elgg_register_menu_item('filter', array(
				'name' => 'service_providers',
				'href' => "/activity/service_providers",
				'text' => "Service Providers",
				'priority' => 500,
				'contexts' => array('activity'),
		));
		
		elgg_register_menu_item('filter', array(
				'name' => 'following',
				'href' => "/activity/following",
				'text' => "Following",
				'priority' => 500,
				'contexts' => array('activity'),
		));
	}

	// Show menu link in the correct context
	if (in_array($context, array("friends", "friendsof", "collections", "messages")) && !empty($page_owner) && $page_owner->canEdit()){
		// For clients, add
		//     -'Service Providers' to page menu
		//     -'Following' to page menu
		//     -'Followers' to page menu
		//     -'Friend Requests' to page menu
		if ($user && elgg_instanceof($user, "user", "client_subtype")) {
			elgg_register_menu_item("page", array(
					"name" => "service_providers",
					"text" => elgg_echo("cmr:service_providers:menu"),
					"href" => "service_providers/" . $page_owner->username,
					"contexts" => array("friends", "friendsof", "collections", "messages"),
			));

			elgg_register_menu_item("page", array(
					"name" => "following",
					"text" => elgg_echo("cmr:following:menu"),
					"href" => "following/" . $page_owner->username,
					"contexts" => array("friends", "friendsof", "collections", "messages"),
			));

			elgg_register_menu_item("page", array(
					"name" => "followers",
					"text" => elgg_echo("cmr:followers:menu"),
					"href" => "followers/" . $page_owner->username,
					"contexts" => array("friends", "friendsof", "collections", "messages"),
			));

			$options = array(
					"type" => "user",
					"count" => true,
					"relationship" => "friendrequest",
					"relationship_guid" => $page_owner->getGUID(),
					"inverse_relationship" => true
			);
			if ($count = elgg_get_entities_from_relationship($options)){
				$extra = " [" . $count . "]";
			} else {
				$extra = "";
			}
			elgg_register_menu_item("page", array(
					"name" => "friend_request",
					"text" => elgg_echo("cmr:friend_request:menu") . $extra,
					"href" => "friend_request/" . $page_owner->username,
					"contexts" => array("friends", "friendsof", "collections", "messages"),
					"section" => "friend_request"
			));
		}
	}
}
