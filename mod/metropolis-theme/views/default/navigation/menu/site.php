<?php
/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
   * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('more', $vars['menu'], array());

echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-default clearfix">';
foreach ($default_items as $menu_item) {
	echo elgg_view('navigation/menu/elements/item-sync-white', array('item' => $menu_item));
}

if ($more_items) {
	echo '<li class="elgg-more">';

	$more = elgg_echo('more');
	echo "<a rel=\"toggle\" href=\"#elgg-menu-site-more\">$more";
	echo '<span class="elgg-icon-sync-white elgg-icon-icon-swapdown onright"></span></a>';
	echo '</li>';
	
}
echo '</ul>';
if ($more_items) {
echo elgg_view('navigation/menu/elements/section-toggle-white', array(
		'id' => 'elgg-menu-site-more', 
		'class' => 'elgg-menu elgg-menu-site elgg-menu-site-more', 
		'items' => $more_items,
	));
}