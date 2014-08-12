<?php

elgg_register_event_handler('init', 'system', 'sps_init');
elgg_register_event_handler("pagesetup", "system", "sps_pagesetup", 1000);


/**
 * Initialize page handler and site menu item
 */
function sps_init() {
	elgg_register_page_handler('sps', 'sps_page_handler');

	$item = new ElggMenuItem('sps', "Service Providers", 'sps');
	elgg_register_menu_item('site', $item);

}

/**
 * Members page handler
 *
 * @param array $page url segments
 * @return bool
 */
function sps_page_handler($page) {
	$base = elgg_get_plugins_path() . 'sps/pages/sps';

	if (!isset($page[0])) {
		$page[0] = 'All';
	}

	$vars = array();
	$vars['page'] = $page[0];

	if ($page[0] == 'search') {
		$vars['search_type'] = $page[1];
		$vars['category'] = $page[2];
		require_once "$base/search.php";
	} else {
		require_once "$base/index.php";
	}
	return true;
}

function sps_pagesetup() {
	elgg_unregister_menu_item("extras", "friends");
	elgg_unregister_menu_item("extras", "messages");
	elgg_unregister_menu_item("extras", "report_this");
	elgg_unregister_menu_item("extras", "sharethis");
	elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');
}

