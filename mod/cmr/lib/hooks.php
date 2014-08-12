<?php

/**
 * Hooks for hovering menu, i.e., the menu that dynamically opens when you hover over profile icon of a user.
 */
function cmr_user_hover_menu($hook, $type, $return, $params) {
	$target_user = $params['entity'];
	if (!empty($params) && is_array($params) && ($user = elgg_get_logged_in_user_entity())) {

		if (elgg_instanceof($user, "user", "client_subtype") && elgg_instanceof($target_user, "user", "client_subtype") && $user->getGUID() != $target_user->guid) {
			// Current user: client
			// target_user: client

			// If friend_request relationship exists, replace the default 'Add friend' option in the menu with
			// 'Approve pending friend request' option.
			if (check_entity_relationship($user->getGUID(), "friendrequest", $target_user->guid)){
				foreach ($return as &$item){
					if($item->getName() == "add_friend"){
						$item->setText(elgg_echo("cmr:friend_request:friend:add:pending"));
						$item->setHref("friend_request/" . $user->username . "#friend_request_sent_listing");
						break;
					}
				}
			}
				
			// If flw relationship exists, include 'Unfollow' option in the menu. Else, include 'Follow' option in the menu.
			if (check_entity_relationship($user->getGUID(), 'flw', $target_user->guid)) {
				$url = elgg_add_action_tokens_to_url("action/flw_revoke?object_guid=$target_user->guid");
				$item = new ElggMenuItem('flw_revoke', elgg_echo('cmr:flw_revoke:user'), $url);
			} else {
				$url = elgg_add_action_tokens_to_url("action/flw_establish?object_guid=$target_user->guid");
				$item = new ElggMenuItem('flw_establish', elgg_echo('cmr:flw_establish:user'), $url);
			}
			$item->setSection('action');
			$return[] = $item;

		} elseif (elgg_instanceof($user, "user", "client_subtype") && elgg_instanceof($target_user, "user", "business_subtype")) {
			// Current user: client
			// target_user: business

			// If flw relationship exists, include 'Unfollow' option in the menu. Else, include 'Follow' option in the menu.
			if (check_entity_relationship($user->getGUID(), 'flw', $target_user->guid)) {
				$url = elgg_add_action_tokens_to_url("action/flw_revoke?object_guid=$target_user->guid");
				$item = new ElggMenuItem('flw_revoke', elgg_echo('cmr:flw_revoke:user'), $url);
			} else {
				$url = elgg_add_action_tokens_to_url("action/flw_establish?object_guid=$target_user->guid");
				$item = new ElggMenuItem('flw_establish', elgg_echo('cmr:flw_establish:user'), $url);
			}
			$item->setSection('action');
			$return[] = $item;

			// Replace the default 'Add friend' option in the menu with 'Revoke as a service provider', if c2b relationship exists. Replace it with 'Select as a service provider' otherwise.  
			foreach ($return as &$item) {
				if($item->getName() == "add_friend") {
					if (check_entity_relationship($user->getGUID(), 'c2b', $target_user->guid)) {
						$item->setText(elgg_echo("cmr:c2b_revoke:user"));
						$item->setHref(elgg_add_action_tokens_to_url("action/c2b_revoke?object_guid=$target_user->guid"));
						break;
					} else {
						$item->setText(elgg_echo("cmr:c2b_establish:user"));
						$item->setHref(elgg_add_action_tokens_to_url("action/c2b_establish?object_guid=$target_user->guid"));
						break;
					}
				}
			}
				
		} elseif (elgg_instanceof($user, "user", "business_subtype") && elgg_instanceof($target_user, "user", "client_subtype")) {
			// Current user: business
			// target_user: client

			// Delete the default 'Add friend' option in the menu.
			$old_return = $return;
			$return = array();
			for ($i = 0; $i < count($old_return); ++$i) {
				if ($old_return[$i]->getName() != "add_friend") {
					$return[] = $old_return[$i];
				}
			}

			// If flw relationship exists, include 'Drop as a follower' option in the menu.
			if (check_entity_relationship($target_user->guid, 'flw', $user->getGUID())) {
				$url = elgg_add_action_tokens_to_url("action/flw_drop?object_guid=$target_user->guid");
				$item = new ElggMenuItem('flw_drop', elgg_echo('cmr:flw_drop:user'), $url);
				$item->setSection('action');
				$return[] = $item;
			}
				
			// If c2b relationship exists, include 'Drop as a client' option in the menu.
			if (check_entity_relationship($target_user->guid, 'c2b', $user->getGUID())) {
				$url = elgg_add_action_tokens_to_url("action/c2b_drop?object_guid=$target_user->guid");
				$item = new ElggMenuItem('c2b_drop', elgg_echo('cmr:c2b_drop:user'), $url);
				$item->setSection('action');
				$return[] = $item;
			}

		} elseif (elgg_instanceof($user, "user", "business_subtype") && elgg_instanceof($target_user, "user", "business_subtype")) {
			// Current user: business
			// target_user: business
		
			// Delete the default 'Add friend' option in the menu.
			$old_return = $return;
			$return = array();
			for ($i = 0; $i < count($old_return); ++$i) {
				if ($old_return[$i]->getName() != "add_friend") {
					$return[] = $old_return[$i];
				}
			}		
		}
		
	}

	return $return;
}
