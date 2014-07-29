<?php

/**
 * Decline an instigation by another client to establish a two-way friendship.
 */

	$friend_guid = (int) get_input("guid");
	
	if($friend = get_user($friend_guid)){
		$user = elgg_get_logged_in_user_entity();
		
		//TODO (Shahdad): Might want to assert the types of user and friend as clients.
		
		if(remove_entity_relationship($friend->getGUID(), "friendrequest", $user->getGUID())) {
			$subject = elgg_echo("cmr:friend_request:decline:subject", array($user->name));
			$message = elgg_echo("cmr:friend_request:decline:message", array($friend->name, $user->name));
			
			notify_user($friend->getGUID(), $user->getGUID(), $subject, $message);
			
			system_message(elgg_echo("cmr:friend_request:decline:success"));
		} else {
			register_error(elgg_echo("cmr:friend_request:decline:fail"));
		}
	}
	
	forward(REFERER);
	