<?php

/**
 * Drop a c2b relationship.
 * Note: For a c2b relationship, bgn is a client, end is a business.
 * Dropping a c2b relationship is instigated by the end entity.
 */

$object_guid = get_input('object_guid');

$object = get_entity($object_guid);

if (!$object instanceof ElggEntity) {
	register_error("Could not find the specified entity.  It may have been deleted or you may not have access to it");
	forward(REFERER);
}

//TODO (Shahdad): Might want to assert the type of logged-in user as business and the object's as client.

if (remove_entity_relationship($object_guid, 'c2b', elgg_get_logged_in_user_guid())) {
	system_message(elgg_echo("You are no longer a service provider for %s", array($object->name)));	
} else {
	register_error(elgg_echo("Something went wrong when attempting to drop %s as your client", array($object->name)));
}

forward(REFERER);