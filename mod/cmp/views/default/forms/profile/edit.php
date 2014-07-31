<?php
/**
 * Edit profile form
 *
 * @uses vars['entity']
 */

?>

<div>
	<label><?php echo elgg_echo('user:name:label'); ?></label>
	<?php echo elgg_view('input/text', array('name' => 'name', 'value' => $vars['entity']->name)); ?>
</div>
<?php

$sticky_values = elgg_get_sticky_values('profile:edit');

$user = $vars['entity'];

$profile_fields = elgg_get_config('profile_fields');
if (is_array($profile_fields) && count($profile_fields) > 0) {
	foreach ($profile_fields as $shortname => $valtype) {
		// For each user type, i.e., client or business, avoid setting certain profile fields.
		if (elgg_instanceof($user, "user", "client_subtype") && (
		 		$shortname == "admin_defined_profile_1"/*"Summary"*/ || 
				$shortname == "admin_defined_profile_2"/*"Business Category"*/ ||
				$shortname == "admin_defined_profile_3"/*"Business Sub-Category"*/ ||
				$shortname == "admin_defined_profile_4"/*"Description"*/ ||
				$shortname == "admin_defined_profile_6"/*"Address"*/ ||
				$shortname == "admin_defined_profile_10"/*"Twitter Username"*/ ||
				$shortname == "admin_defined_profile_11"/*"Website"*/
		)) {
			continue;
		}
		if (elgg_instanceof($user, "user", "business_subtype") && (
				$shortname == "admin_defined_profile_12"/*"Age"*/ ||
				$shortname == "admin_defined_profile_13"/*"Gender"*/ ||
				$shortname == "admin_defined_profile_14"/*"Relationship Status"*/
		)) {
			continue;
		}

		$metadata = elgg_get_metadata(array(
			'guid' => $vars['entity']->guid,
			'metadata_name' => $shortname,
			'limit' => false
		));
		if ($metadata) {
			if (is_array($metadata)) {
				$value = '';
				foreach ($metadata as $md) {
					if (!empty($value)) {
						$value .= ', ';
					}
					$value .= $md->value;
					$access_id = $md->access_id;
				}
			} else {
				$value = $metadata->value;
				$access_id = $metadata->access_id;
			}
		} else {
			$value = '';
			$access_id = ACCESS_DEFAULT;
		}

		// sticky form values take precedence over saved ones
		if (isset($sticky_values[$shortname])) {
			$value = $sticky_values[$shortname];
		}
		if (isset($sticky_values['accesslevel'][$shortname])) {
			$access_id = $sticky_values['accesslevel'][$shortname];
		}

?>
<div>
	<label><?php echo elgg_echo("profile:{$shortname}") ?></label>
	<?php
		$params = array(
			'name' => $shortname,
			'value' => $value,
		);
		echo elgg_view("input/{$valtype}", $params);
		$params = array(
			'name' => "accesslevel[$shortname]",
			'value' => $access_id,
		);
		echo elgg_view('input/access', $params);
	?>
</div>
<?php
	}
}

elgg_clear_sticky_form('profile:edit');

?>
<div class="elgg-foot">
<?php
	echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $vars['entity']->guid));
	echo elgg_view('input/submit', array('value' => elgg_echo('save')));
?>
</div>
