<?php
class ElggBusiness extends ElggUser {
	
	protected function initializeAttributes() {
		parent::initializeAttributes();
	
		$this->attributes['subtype'] = "business_subtype";
	}
	
	function addFriend($friend_guid) {
		return false;
	}
}
