<?php
/**
 * Menu group
 *
 * @uses $vars['items']                Array of menu items
 * @uses $vars['class']                Additional CSS class for the section
 * @uses $vars['name']                 Name of the menu
 * @uses $vars['section']              The section name
 * @uses $vars['item_class']           Additional CSS class for each menu item
 * @uses $vars['show_section_headers'] Do we show headers for each section
   * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

$headers = elgg_extract('show_section_headers', $vars, false);
$class = elgg_extract('class', $vars, '');
$id = elgg_extract('id', $vars, '');
$addspan = elgg_extract('addspan', $vars, false);
$item_class = elgg_extract('item_class', $vars, '');

if ($headers) {
	$name = elgg_extract('name', $vars);
	$section = elgg_extract('section', $vars);
	echo '<h2>' . elgg_echo("menu:$name:header:$section") . '</h2>';
}
echo "<ul id=\"$id\" class=\"$class\">";

foreach ($vars['items'] as $menu_item) {
	echo elgg_view('navigation/menu/elements/item', array(
		'item' => $menu_item,
		'item_class' => $item_class,
	));
}
echo '</ul>';
