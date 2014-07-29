<?php
class ElggClient extends ElggUser {
	
	protected function initializeAttributes() {
		parent::initializeAttributes();
	
		$this->attributes['subtype'] = "client_subtype";
	}
	
	function addFriend($friend_guid) {
		$target_entity = get_entity($friend_guid);
		if (!elgg_instanceof($target_entity, "user", "client_subtype")) {
			return false;
		}
		return user_add_friend($this->getGUID(), $friend_guid);
	}
}
