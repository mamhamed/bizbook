<?php

add_translation('en', array(
	'cmr:friend_request' => "Friend Request",
	'cmr:friend_request:menu' => "Friend Requests",
	'cmr:friend_request:title' => "Friend Requests for: %s",

	'cmr:friend_request:new' => "New friend request",

	'cmr:friend_request:friend:add:pending' => "Friend request pending",

	'cmr:friend_request:newfriend:subject' => "%s wants to be your friend!",
	'cmr:friend_request:newfriend:body' => "%s wants to be your friend! But they are waiting for you to approve the request...so login now so you can approve the request!
You can view your pending friend requests at:
%s

Make sure you are logged into the website before clicking on the following link otherwise you will be redirected to the login page.

(You cannot reply to this email.)",

	// Actions
	// Add request
	'cmr:friend_request:add:failure' => "Sorry, because of a system error we were unable to complete your request. Please try again.",
	'cmr:friend_request:add:successful' => "You have requested to be friends with %s. They must approve your request before they will show on your friends list.",
	'cmr:friend_request:add:exists' => "You've already requested to be friends with %s.",

	// Approve request
	'cmr:friend_request:approve' => "Approve",
	'cmr:friend_request:approve:subject' => "%s has accepted your friend request",
	'cmr:friend_request:approve:message' => "Dear %s,

	%s has accepted your request to become a friend.",
	'cmr:friend_request:approve:successful' => "%s is now a friend",
	'cmr:friend_request:approve:fail' => "Error while creating friend relation with %s",

	// Decline request
	'cmr:friend_request:decline' => "Decline",
	'cmr:friend_request:decline:subject' => "%s has declined your friend request",
	'cmr:friend_request:decline:message' => "Dear %s,

%s has declined your request to become a friend.",
	'cmr:friend_request:decline:success' => "Friend request successfully declined",
	'cmr:friend_request:decline:fail' => "Error while declining Friend request, please try again",

	// Revoke request
	'cmr:friend_request:revoke' => "Revoke",
	'cmr:friend_request:revoke:success' => "Friend request successfully revoked",
	'cmr:friend_request:revoke:fail' => "Error while revoking Friend request, please try again",

	// Views
	// Received
	'cmr:friend_request:received:title' => "Received Friend requests",
	'cmr:friend_request:received:none' => "No requests pending your approval",

	// Sent
	'cmr:friend_request:sent:title' => "Sent Friend requests",
	'cmr:friend_request:sent:none' => "No sent requests pending approval",

	'cmr:c2b_establish:user' => 'Select as a service provider',
	'cmr:c2b_revoke:user' => 'Revoke as a service provider',
	'cmr:c2b_drop:user' => 'Drop as a client',
	
	'cmr:flw_establish:user' => 'Follow',
	'cmr:flw_revoke:user' => 'Unfollow',
	'cmr:flw_drop:user' => 'Drop as a follower',

	'cmr:service_providers:menu' => "Service Providers",
	'cmr:service_providers:title' => "Service Providers",
	'cmr:following:menu' => "Following",
	'cmr:following:title' => "Followed businesses/clients",
	'cmr:followers:menu' => "Followers",
	'cmr:followers:title' => "Followers",
	'cmr:clients:menu' => "Clients",
	'cmr:clients:title' => "Clients",
	
	'cmr:widgets:service_providers:name' => 'Service Providers',
	'cmr:widgets:service_providers:description' => 'A list of the businesses that you have chosen as a providers of services',

	'cmr:widgets:clients:name' => 'Clients',
	'cmr:widgets:clients:description' => 'A list of your clients',

	'cmr:widgets:following:name' => 'Following',
	'cmr:widgets:following:description' => 'A list of the users you are following',
	
	'cmr:widgets:followers:name' => 'Followers',
	'cmr:widgets:followers:description' => 'A list of your followers',

));