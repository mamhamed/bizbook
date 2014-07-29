<?php
	gatekeeper();
	
	$user = elgg_get_page_owner_entity();
	if(!elgg_instanceof($user, "user")){
		$user = elgg_get_logged_in_user_entity();
		elgg_set_page_owner_guid($user->getGUID());
	}
	
	if(!$user->canEdit() || !elgg_instanceof($user, "user", "client_subtype")){
		forward(REFERER);
	}
	
	// set the correct context and page owner
	elgg_set_context("friends");
	
	// fix to show collections links
	if($user->getGUID() == elgg_get_logged_in_user_guid()){
		collections_submenu_items();
	}
	
	$options = array(
		"type" => "user",
		"limit" => false,
		"relationship" => "flw",
		"relationship_guid" => $user->getGUID(),
	);
	
	// Get all followd clients/businesses
	$following_entities = elgg_get_entities_from_relationship($options);
	
	// Get page elements
	$title_text = elgg_echo('cmr:following:title', array($user->name));
	$title = elgg_view_title($title_text);
	
	$content = elgg_view_entity_list($following_entities);

	// Build page
	$params = array(
		"title" => $title_text,
		"content" => $content,
		"filter" => false
	);
	
	$body = elgg_view_layout("content", $params);
	
	// Draw page
	echo elgg_view_page($title_text, $body);
