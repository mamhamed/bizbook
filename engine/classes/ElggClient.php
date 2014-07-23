<?php
class ElggClient extends ElggUser {
	
	protected function initializeAttributes() {
		parent::initializeAttributes();
	
		$this->attributes['subtype'] = "client_subtype";
	}
	
	function addFriend($friend_guid) {
		sh();
		error_log("addFriend() in ElggClient is called.");
	}
}
