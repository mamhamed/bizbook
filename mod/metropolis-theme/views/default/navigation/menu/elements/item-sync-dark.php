<?php
/**
 * A single element of a menu.
 *
 * @package Elgg.Core
 * @subpackage Navigation
 *
 * @uses $vars['item']       ElggMenuItem
 * @uses $vars['item_class'] Additional CSS class for the menu item
   * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

$item = $vars['item'];
$link_class = 'elgg-menu-closed';
if ($item->getSelected()) {
	// @todo switch to addItemClass when that is implemented
	//$item->setItemClass('elgg-state-selected');
	$link_class = 'elgg-menu-opened';
}

$children = $item->getChildren();
if ($children) {
	$item->addLinkClass($link_class);
	$item->addLinkClass('elgg-menu-parent');
}

$item_class = $item->getItemClass();
if ($item->getSelected()) {
	$item_class = "$item_class elgg-state-selected";
}
if (isset($vars['item_class']) && $vars['item_class']) {
	$item_class .= ' ' . $vars['item_class'];
}

echo "<li class=\"$item_class\">";
echo $item->getContent(array(
		'span_after' => true,
		'icon_class_after' => 'elgg-icon-sync',
		'link_icon_after' => 'elgg-icon-icon-swapright onright',
	));
if ($children) {
	echo elgg_view('navigation/menu/elements/section', array(
		'items' => $children,
		'class' => 'elgg-menu elgg-child-menu',
	));
}
echo '</li>';
