<?php
/**
 * Owner Menu module
 * Juipo Metropolis Theme
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 *
 */

$user = elgg_get_logged_in_user_entity();

if (!$user) {
	return TRUE;
}

$title = elgg_echo('metropolis_theme:welcome', array($user->name));

$body = elgg_view_menu('owner_block', array(
	'entity' => elgg_get_page_owner_entity(),
));

echo elgg_view('page/components/module', array(
	'title' => $title,
	'body' => $body,
	'class' => 'elgg-module-aside'
));
