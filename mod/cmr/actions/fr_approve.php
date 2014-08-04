<?php
	
/**
 * Approve a two-way friendship by establishing a duo of friend relationships.
 * Note: For a friend relationship, bgn is a client, end is also a client. 
 */

	$friend_guid = (int) get_input("guid");
	
	if($friend = get_user($friend_guid)){
		$user = elgg_get_logged_in_user_entity();
		
		//TODO (Shahdad): Might want to assert the types of user and friend as clients.
		
		if(remove_entity_relationship($friend->getGUID(), "friendrequest", $user->getGUID())) {
			global $CONFIG;
			
			if(isset($CONFIG->events["create"]["friend"])) {
				$oldEventHander = $CONFIG->events["create"]["friend"];
				$CONFIG->events["create"]["friend"] = array();			//Removes any event handlers
			}
			
			$user->addFriend($friend->getGUID());
			$friend->addFriend($user->getGUID());			//Friends mean reciprical...
			
			if(isset($CONFIG->events["create"]["friend"])) {
				$CONFIG->events["create"]["friend"] = $oldEventHander;
			}
			
			// notify the user about the acceptance
			$subject = elgg_echo("cmr:friend_request:approve:subject", array($user->name));
			$message = elgg_echo("cmr:friend_request:approve:message", array($friend->name, $user->name));
			
			notify_user($friend->getGUID(), $user->getGUID(), $subject, $message);
			
			system_message(elgg_echo("cmr:friend_request:approve:successful", array($friend->name)));
			
			// add to river
			add_to_river("river/relationship/friend/create", "friend", $user->getGUID(), $friend->getGUID());
			add_to_river("river/relationship/friend/create", "friend", $friend->getGUID(), $user->getGUID());
		} else {
			register_error(elgg_echo("cmr:friend_request:approve:fail", array($friend->name)));
		}
	}
	
	forward(REFERER);
	