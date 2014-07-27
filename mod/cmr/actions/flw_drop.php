<?php

/**
 * Dropping an flw relationship.
 * Note: For an flw relationship, bgn is a client, end is a client or a business.
 * Dropping an flw relationship is instigated by the end entity.
 */

$object_guid = get_input('object_guid');

$object = get_entity($object_guid);

if (!$object instanceof ElggEntity) {
	register_error("Could not find the specified entity.  It may have been deleted or you may not have access to it");
	forward(REFERER);
}

//TODO (Shahdad): Might want to assert the type of object as client.

if (remove_entity_relationship($object_guid, 'flw', elgg_get_logged_in_user_guid())) {
	system_message(elgg_echo("%s is no longer following you", array($object->name)));	
} else {
	register_error(elgg_echo("Something went wrong when attempting to drop %s as your follower", array($object->name)));
}

forward(REFERER);