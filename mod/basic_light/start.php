<?php
/*
 *
 * Theme Basic Light
 *
 * @author Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2013, Elggzone
 *
 * @link http://www.perjensen-online.dk/
 *
 */
 
elgg_register_event_handler('init','system','basic_init');
 
function basic_init() {
        //mhf remove rss
        elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');

	$action_path = dirname(__FILE__) . '/actions';
	elgg_register_action("basic_light/admin/settings", "$action_path/settings.php", 'admin');
	elgg_register_action("basic_light/admin/sidebar", "$action_path/settings.php", 'admin');
		
	$plugin = elgg_get_plugin_from_id('basic_light');
	
	if ($plugin->show_thewire == 'yes'){
		elgg_register_action("basic_light/add", "$action_path/add.php");		
		elgg_extend_view('js/elgg', 'js/basic_light/update');
	}
	
	elgg_register_event_handler('pagesetup', 'system', 'basic_pagesetup_handler', 1000);

	elgg_register_admin_menu_item('configure', 'basic_light', 'settings');
		
	elgg_extend_view('css/elgg', 'basic_light/css');
	elgg_extend_view('css/admin', 'basic_light/admin');
	
	elgg_unregister_js('elgg.friendspicker');

	if (elgg_is_logged_in()	&& elgg_get_context() == 'activity'){
			
		if ($plugin->show_thewire == 'yes'){	
			elgg_extend_view('page/layouts/content/header', 'page/elements/riverwire', 1);
		}
		if ($plugin->show_icon != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_icon, 'page/elements/rivericon', '501');
		}
		if ($plugin->show_menu != 'no'){		
			elgg_extend_view('page/elements/' . $plugin->show_menu, 'page/elements/ownermenu', '502');
		}
	}
	if ((elgg_get_context() == 'activity') || (elgg_get_context() == 'thewire')){
		if ($plugin->show_custom != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_custom, 'page/elements/custom_module', 504);
		}
	}
	
	themes_register_themes();

	$theme = elgg_get_plugin_setting('active_theme', 'basic_light');
	
	if ($theme != 'default' && elgg_get_context() != 'admin'){
		elgg_load_css($theme);
	}

}

function themes_register_themes() {
	$themes = array('default', 'bronco', 'palesky');

	foreach($themes as $theme) {
		elgg_register_simplecache_view("css/themes/$theme");
		$url = elgg_get_simplecache_url('css', "themes/$theme");
		elgg_register_css($theme, $url);
	}
}

function basic_pagesetup_handler() {

	elgg_unextend_view('page/elements/header', 'search/header');

	elgg_unregister_menu_item('topbar', 'dashboard');
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	// Extend footer with copyright
	$year = date('Y');	
	$href = "http://www.perjensen-online.dk";
	elgg_register_menu_item('footer', array(
		'name' => 'copyright_this',
		'href' => $href,
		'title' => elgg_echo('basic_light:tooltip'),
		'text' => elgg_echo('basic_light:copyright') . $year . elgg_echo(' Elggzone'),
		'priority' => 1,
		'section' => 'alt',
	));	
			
	// Extend footer with elgg link
	$href = "http://elgg.org";
	elgg_register_menu_item('footer', array(
		'name' => 'elgg',
		'href' => $href,
		'text' => elgg_echo('basic_light:elgg'),
		'priority' => 2,
		'section' => 'alt',
	));
	
	if (elgg_is_logged_in()) {	
		$user = elgg_get_logged_in_user_entity();
		
		if (elgg_is_active_plugin('dashboard')) {
			elgg_register_menu_item('topbar', array(
				'name' => 'dashboard',
				'href' => 'dashboard',
				'text' => elgg_view_icon('home') . elgg_echo('dashboard'),
				'priority' => 1000,
				'section' => 'alt',
			));
		}
		if (elgg_is_active_plugin('reportedcontent')) {
			elgg_unregister_menu_item('footer', 'report_this');
		
			$href = "javascript:elgg.forward('reportedcontent/add'";
			$href .= "+'?address='+encodeURIComponent(location.href)";
			$href .= "+'&title='+encodeURIComponent(document.title));";
				
			elgg_register_menu_item('extras', array(
				'name' => 'report_this',
				'href' => $href,
				'text' => elgg_view_icon('report-this') . elgg_echo(''),
				'title' => elgg_echo('reportedcontent:this:tooltip'),
				'priority' => 100,
			));
		}
	}
}
