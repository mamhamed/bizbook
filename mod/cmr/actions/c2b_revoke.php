<?php

/**
 * Revoke a c2b relationship.
 * Note: For a c2b relationship, bgn is a client, end is a business.
 * Revoking a c2b relationship is instigated by the bgn entity.
 */

$object_guid = get_input('object_guid');

$object = get_entity($object_guid);

if (!$object instanceof ElggEntity) {
	register_error("Could not find the specified entity.  It may have been deleted or you may not have access to it");
	forward(REFERER);
}

//TODO (Shahdad): Might want to assert the type of logged-in user as client and the object's as business.

if (remove_entity_relationship(elgg_get_logged_in_user_guid(), 'c2b', $object_guid)) {
	system_message(elgg_echo("%s is no longer your service provider", array($object->name)));	
} else {
	register_error(elgg_echo("Something went wrong when attempting to revoke %s as your service provider", array($object->name)));
}

forward(REFERER);