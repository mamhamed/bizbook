<?php
/**
 * sps index
 *
 */

$num_members = count(elgg_get_entities(array('type' => 'user', 'subtype' => 'business_subtype', 'limit' => 0)));

$title = "Service Providers";

$options = array('type' => 'user', 'full_view' => false);
$category = $vars['page'];
switch ($category) {
	case 'All':
		$content = elgg_list_entities(array(
			'type' => 'user',
			'subtype' => 'business_subtype'
		), 'elgg_get_entities');
		break;
	default:
		$content = elgg_list_entities(array(
	 		'metadata_name' => 'admin_defined_profile_2',
	 		'metadata_value' => $category,
		), 'elgg_get_entities_from_metadata');
		break;
}

$params = array(
	'content' => $content,
	'sidebar' => elgg_view('sps/sidebar', array('category' => $category)),
	//'title' => $title . " ($num_members)",
	'title' => " ",
	'filter_override' => elgg_view('sps/nav', array('selected' => $category)),
);

$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);
