<?php
/**
 * sps search page
 *
 */

$category = $vars['category'];

$name = sanitize_string(get_input('name'));

$display_query = _elgg_get_display_query($name);

if ($category == 'All') {
	$search_name = 'sps:title:searchname:all';

	$title = elgg_echo($search_name, array($display_query));

	$db_prefix = elgg_get_config('dbprefix');

	$params = array(
		'type' => 'user',
		'subtype' => 'business_subtype',
		'full_view' => false,
		'joins' => array("JOIN {$db_prefix}users_entity u ON e.guid=u.guid"),
		'wheres' => array("(u.name LIKE \"%{$name}%\" OR u.username LIKE \"%{$name}%\")"),
	);
	$content .= elgg_list_entities($params, 'elgg_get_entities');
} else {
	if ($category == "") {
		sh();
	}
	$search_name = 'sps:title:searchname:category';
	
	$title = $category.elgg_echo($search_name, array($display_query));

	$db_prefix = elgg_get_config('dbprefix');

	$params = array(
		'metadata_name' => 'admin_defined_profile_2',
		'metadata_value' => $category,
		'full_view' => false,
		'joins' => array("JOIN {$db_prefix}users_entity u ON e.guid=u.guid"),
		'wheres' => array("(u.name LIKE \"%{$name}%\" OR u.username LIKE \"%{$name}%\")"),
	);
	$content .= elgg_list_entities($params, 'elgg_get_entities_from_metadata');
}

$params = array(
	'title' => $title,
	'content' => $content,
	'sidebar' => elgg_view('sps/sidebar', array('category' => $category)),
	'filter_override' => elgg_view('sps/nav', array('selected' => $category)),
);

$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);
