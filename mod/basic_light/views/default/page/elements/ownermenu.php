<?php
/**
 * Menu module
 *
 */

$user = elgg_get_logged_in_user_entity();

if (!$user) {
	return TRUE;
}

$title = $user->name; //elgg_echo('basic_light:welcome', array($user->name));

$body = elgg_view_menu('owner_block', array(
	'entity' => elgg_get_page_owner_entity(),
));

echo elgg_view('page/components/module', array(
	'title' => $title,
	'body' => $body,
	'class' => 'elgg-module-aside'
));
