<?php
	
/**
 * Revoke a previous instigation by self to establish a two-way friendship.
 */

	$friend_guid = (int) get_input("guid");
	
	if($friend = get_user($friend_guid)){
		$user = elgg_get_logged_in_user_entity();
		
		//TODO (Shahdad): Might want to assert the types of user and friend as clients.
		
		if(remove_entity_relationship($user->getGUID(), "friendrequest", $friend->getGUID())) {
			system_message(elgg_echo("cmr:friend_request:revoke:success"));
		} else {
			register_error(elgg_echo("cmr:friend_request:revoke:fail"));
		}
	}
	
	forward(REFERER);
