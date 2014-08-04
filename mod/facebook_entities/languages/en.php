<?php
/**
 * An english language definition file
 */

$english = array(
	'facebook_entities' => 'Facebook Services',

	'facebook_entities:requires_oauth' => 'Facebook Services requires the OAuth Libraries plugin to be enabled.',

	'facebook_entities:consumer_key' => 'Facebook Application Id',
	'facebook_entities:consumer_secret' => 'Facebook Application Secret Code',

	'facebook_entities:settings:instructions' => 'You must obtain a client id and secret from <a href="http://www.facebook.com/developers/" target="_blank">Facebook</a>. Most of the fields are self explanatory, the one piece of data you will need is the callback url which takes the form http://[yoursite]/action/facebooklogin/return - [yoursite] is the url of your Elgg network.',

	'facebook_entities:usersettings:description' => "Link your %s account with Facebook.",
	'facebook_entities:usersettings:request' => "You must first <a href=\"%s\">authorize</a> %s to access your Facebook account.",
	'facebook_entities:authorize:error' => 'Unable to authorize Facebook.',
	'facebook_entities:authorize:success' => 'Facebook access has been authorized.',

	'facebook_entities:usersettings:authorized' => "You have authorized %s to access your Facebook account: @%s.",
	'facebook_entities:usersettings:revoke' => 'Click <a href="%s">here</a> to revoke access.',
	'facebook_entities:revoke:success' => 'Facebook access has been revoked.',

	'facebook_entities:login' => 'Allow existing users who have connected their Facebook account to sign in with Facebook?',
	'facebook_entities:new_users' => 'Allow new users to sign up using their Facebook account even if manual registration is disabled?',
	'facebook_entities:post_onfb' => 'Want to post facebook account synched status on facebook for new users',
	'facebook_entities:login:success' => 'You have been logged in.',
	'facebook_entities:login:error' => 'Unable to login with Facebook.',
	'facebook_entities:login:email' => "You must enter a valid email address for your new %s account.",
	'facebook_entities:email:subject' => '%s registration successful',
	'facebook_entities:email:body' => '
Hi %s,

Congratulations! You have been successfully registered. Please visit our network here on %s %s.

Your login details are-

Username is %s
Email is %s
Password is %s

You can login using either email id or username.

%s
%s'
	
	);

add_translation('en', $english);
