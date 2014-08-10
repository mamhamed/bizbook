<?php

// Default event handlers
elgg_register_event_handler('init', 'system', 'metro_adj_init');
elgg_register_event_handler("pagesetup", "system", "metro_adj_pagesetup", 920);

function metro_adj_init() {
}

function metro_adj_pagesetup(){

	$context = elgg_get_context();
	$page_owner = elgg_get_page_owner_entity();

	$user = elgg_get_logged_in_user_entity();

	// Replace "Settings" with icon in topbar.
	elgg_unregister_menu_item("topbar", "usersettings");
	elgg_register_menu_item('topbar', array(
		'name' => 'usersettings',
		'href' => "settings/user/{$viewer->username}",
		'text' => elgg_view_icon_white('settings-alt'),
		'title' => elgg_echo("settings"),
		'priority' => 500,
		'section' => 'alt',
	));

	// Replace "Logout" with icon in topbar.
	elgg_unregister_menu_item("topbar", "logout");
	elgg_register_menu_item('topbar', array(
		'name' => 'logout',
		'href' => "action/logout",
		'text' => elgg_view_icon_white('off'),
		'is_action' => TRUE,
		'title' => elgg_echo('logout'),
		'priority' => 1000,
		'section' => 'alt',
	));	

	// Replace "Administration" with icon in topbar.
	if (elgg_is_admin_logged_in()) {
		elgg_unregister_menu_item('topbar', 'administration');
		elgg_register_menu_item('topbar', array(
			'name' => 'administration',
			'href' => 'admin',
			'text' => elgg_view_icon_white('settings'),
			"title" => elgg_echo("admin"),
			'priority' => 100,
			'section' => 'alt',
		));
	}

	// Change icon for "Edit Profile".
	elgg_unregister_menu_item('account', 'profileedit');
	elgg_register_menu_item('account', array(
		'name' => 'profileedit',
		'href' => "/profile/$user->username/edit",
		'text' => elgg_echo('profile:edit'),
		'priority' => 104,
		'span_before' => true,
		'icon_class_before' => 'elgg-icon-white',
		'link_icon_before' => 'elgg-icon-edit',
	));

	// Remove "Notifications" from account.
	elgg_unregister_menu_item('account', "notifications");
	
	// Remove "Edit Avatar" from account.
	elgg_unregister_menu_item('account', "editavatar");
	
	if ($user && elgg_instanceof($user, "user", "business_subtype")) {
		// Remove "Friends" from account.
		elgg_unregister_menu_item('account', "friends");
		
		// Replace "Clients" with icon in topbar.
		elgg_unregister_menu_item("topbar", "clients");
		elgg_register_menu_item("topbar", array(
				"name" => "clients",
				"text" => elgg_view_icon_white('many-users'),
				"href" => "clients/" . $page_owner->username,
				"title" => "Clients",
				"priority" => 100,
		));

		// Add "Clients" to account menu.
		elgg_register_menu_item('account', array(
			'name' => 'clients',
			'href' => "clients/" . $page_owner->username,
			'text' => "Clients",
			'priority' => 104,
			'span_before' => true,
			'icon_class_before' => 'elgg-icon-white',
			'link_icon_before' => 'elgg-icon-many-users',
		));
		
		// Replace "Followers" with icon in topbar.
		elgg_unregister_menu_item("topbar", "followers");
			elgg_register_menu_item("topbar", array(
			"name" => "followers",
			"text" => elgg_view_icon_white('briefcase').elgg_view_icon_white('long-left-arrow').elgg_view_icon_white('many-users'),
			"href" => "followers/" . $page_owner->username,
			"title" => "Followers",
			"priority" => 700,
		));

		// Add "Followers" to account menu.
		elgg_register_menu_item('account', array(
			'name' => 'followers',
			'href' => "followers/" . $page_owner->username,
			'text' => elgg_view_icon_white('briefcase').elgg_view_icon_white('long-left-arrow').elgg_view_icon_white('many-users')." Followers",
			'priority' => 104,
			'span_before' => true
		));
	}

	if ($user && elgg_instanceof($user, "user", "client_subtype")){
		// Replace "Service Providers" with icon in topbar.
		elgg_unregister_menu_item("topbar", "service_providers");
		elgg_register_menu_item("topbar", array(
				"name" => "service_providers",
		        'text' => elgg_view_icon_white('briefcase'),		        
				"href" => "service_providers/" . $page_owner->username,
				"title" => "Service Providers",
				"priority" => 700,
		));

		// Add "Service Providers" to account menu.
		elgg_register_menu_item('account', array(
			'name' => 'service_providers',
			'href' => "service_providers/" . $page_owner->username,
			'text' => "Service Providers",
			'priority' => 104,
			'span_before' => true,
			'icon_class_before' => 'elgg-icon-white',
			'link_icon_before' => 'elgg-icon-briefcase',
		));

		// Replace "Following" with icon in topbar.
		elgg_unregister_menu_item("topbar", "following");
		elgg_register_menu_item("topbar", array(
				"name" => "following",
				"text" => elgg_view_icon_white('user').elgg_view_icon_white("long-right-arrow").elgg_view_icon_white('users'),
				"href" => "following/" . $page_owner->username,
				"title" => "Followees",
				"priority" => 710,
		));

		// Add "Followees" to account menu.
		elgg_register_menu_item('account', array(
			'name' => 'following',
			'href' => "following/" . $page_owner->username,
			'text' => elgg_view_icon_white('user').elgg_view_icon_white('long-right-arrow').elgg_view_icon_white('users')." Followees",
			'priority' => 104,
			'span_before' => true
		));

		// Replace "Followers" with icon in topbar.
		elgg_register_menu_item("topbar", "followers");
		elgg_register_menu_item("topbar", array(
				"name" => "followers",
				"text" => elgg_view_icon_white('user').elgg_view_icon_white('long-left-arrow').elgg_view_icon_white('users'),
				"href" => "followers/" . $page_owner->username,
				"title" => "Followers",
				"priority" => 710,
		));

		// Add "Followers" to account menu.
		elgg_register_menu_item('account', array(
			'name' => 'followers',
			'href' => "followers/" . $page_owner->username,
			'text' => elgg_view_icon_white('user').elgg_view_icon_white('long-left-arrow').elgg_view_icon_white('users')." Followers",
			'priority' => 104,
			'span_before' => true
		));
		
	}
}
