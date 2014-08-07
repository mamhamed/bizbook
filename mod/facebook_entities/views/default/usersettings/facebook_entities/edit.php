<?php

$user_id = elgg_get_logged_in_user_guid();
$facebook_id = elgg_get_plugin_user_setting('uid', $user_id, 'facebook_entities');
$access_token = elgg_get_plugin_user_setting('access_token', $user_id, 'facebook_entities');
$site_name = elgg_get_site_entity()->name;
echo '<div>' . elgg_echo('facebook_entities:usersettings:description', array($site_name)) . '</div>';

if (!$facebook_id || !$access_token) {
	// send user off to validate account
	$request_link = elgg_get_site_url() . 'facebook_entities/addFacebook' ;
	echo '<div>' . elgg_echo('facebook_entities:usersettings:request', array($request_link, $site_name)) . '</div>';
} else {
	elgg_load_library('facebook');
	$facebook = facebookservice_api();
	$user = $facebook->api('/me', 'GET', array('access_token' => $access_token));
	if(isset($user['name'])) {
		echo '<p>' . sprintf(elgg_echo('facebook_entities:usersettings:authorized'), $user['name'], $user['link']) . '</p>';
	}

	$url = elgg_get_site_url() . "facebook_entities/revoke";
	echo '<div>' . sprintf(elgg_echo('facebook_entities:usersettings:revoke'), $url) . '</div>';
}