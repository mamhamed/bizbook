<?php

	gatekeeper();
	
	$user = elgg_get_page_owner_entity();
	if(!elgg_instanceof($user, "user")){
		$user = elgg_get_logged_in_user_entity();
		elgg_set_page_owner_guid($user->getGUID());
	}
	
	if(!$user->canEdit()) {
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
		"inverse_relationship" => true
	);
	
	// Get all received requests
	$follower_entities = elgg_get_entities_from_relationship($options);
	
	// Get page elements
	$title_text = elgg_echo('cmr:followers:title', array($user->name));
	$title = elgg_view_title($title_text);
	
	$content = elgg_view_entity_list($follower_entities);
	
	// Build page
	$params = array(
		"title" => $title_text,
		"content" => $content,
		"filter" => false
	);
	
	$body = elgg_view_layout("content", $params);
	
	// Draw page
	echo elgg_view_page($title_text, $body);
	