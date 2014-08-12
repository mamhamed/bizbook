<?php
/**
 * sps sidebar
 */

$category = $vars['category'];
if ($category == 'All') {
	$title = "Your Top choices";
} else {
	$title = "Your Top choices for ".$category."s";
}
echo elgg_view('output/longtext', array('value' => $title));

$user_guid = elgg_get_logged_in_user_guid();

$entities = elgg_get_entities_from_relationship(array(
				'relationship' => 'c2b',
				'relationship_guid' => $user_guid,
				'limit' => 0,
				));


$view_rendered = 0;
foreach ($entities as $entity) {
	if ($category == 'All') {
		echo elgg_view_list_item($entity);
		$view_rendered = 1;
	} else {
		$metadata = elgg_get_metadata(array(
			'guid' => $entity->guid,
			'metadata_name' => 'admin_defined_profile_2',
			'limit' => 1,
		));
		if ($metadata[0]->value == $category) {
			echo elgg_view_list_item($entity);
			$view_rendered = 1;
		}
	}
}
if ($view_rendered == 0) {
	echo "You have no Top Choice";
	echo "<p></p>";
}

// name search
$params = array(
	'method' => 'get',
	'action' => elgg_get_site_url() . 'sps/search/name/'.$category,
	'disable_security' => true,
);
$body = elgg_view_form('members/name_search', $params);

if ($category == "All") {
	$search_name = elgg_echo('sps:searchname', array('Service Providers'));
} else {
	$search_name = elgg_echo('sps:searchname', array($category));
}

echo elgg_view_module('aside', $search_name, $body);