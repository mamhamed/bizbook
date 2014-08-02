<?php
/**
 * Elgg sidebar contents
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */


echo elgg_view_menu('extras', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

echo elgg_view('page/elements/owner_block', $vars);

$user = elgg_get_logged_in_user_entity();
$username = $user->username;

elgg_register_menu_item('page', array(
'name' => 'facebook_friends',
'text' => elgg_echo('Facebook Friends'),
'href' => '/facebook_entities/'.$username . '/viewFBfriends',
'context' => 'friends'
));

elgg_register_menu_item('page', array(
    'name' => 'fb_top_proz',
    'text' => elgg_echo('Facebook Proz'),
    'href' => '/facebook_entities/'.$username . '/viewFBproz',
    'context' => 'friends'
));

elgg_register_menu_item('page', array(
'name' => 'facebook_likes',
'text' => elgg_echo('Facebook Likes'),
'href' => '/facebook_entities/' .$username . '/viewFBlikes',
'context' => 'friends'
));

elgg_register_menu_item('page', array(
    'name' => 'facebook_places',
    'text' => elgg_echo('Facebook places'),
    'href' => '/facebook_entities/' . $username .'/viewFBplaces',
    'context' => 'friends'
));


elgg_unregister_menu_item('page', 'friends:view:collections');

echo elgg_view_menu('page', array('sort_by' => 'name'));
	
// optional 'sidebar' parameter
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}

// @todo deprecated so remove in Elgg 2.0
// optional second parameter of elgg_view_layout
if (isset($vars['area2'])) {
	echo $vars['area2'];
}

// @todo deprecated so remove in Elgg 2.0
// optional third parameter of elgg_view_layout
if (isset($vars['area3'])) {
	echo $vars['area3'];
}
