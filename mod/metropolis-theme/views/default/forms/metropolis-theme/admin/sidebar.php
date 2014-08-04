<?php
/**
 * Juipo Metropolis Theme Sidebar settings
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 * 
 */

	$plugin = elgg_get_plugin_from_id('metropolis-theme');

	if (!isset($plugin->show_icon)) {
		$plugin->show_icon = 'yes';
	}
	if (!isset($plugin->show_menu)) {
		$plugin->show_menu = 'yes';
	}
	if (!isset($plugin->banner)) {
		$plugin->banner = 'yes';
	}
	if (!isset($plugin->show_custom)) {
		$plugin->show_custom = 'no';
	}
    if (!isset($plugin->html_content_title)) {
		$plugin->html_content_title = 'Custom Content';
	}


echo "<div class=\"label\">" . elgg_echo('metropolis_theme:info:sidebar') . "</div>";

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:show_icon');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_icon]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->show_icon,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:menu');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_menu]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->show_menu,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:banner');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[banner]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->banner,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:custom');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_custom]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->show_custom,
));
echo '</div>';

echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:html_title');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[html_content_title]",
	'value' => $plugin->html_content_title,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:html');
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[html_content]",
	'value' => $plugin->html_content,
));
echo "</div>";

echo elgg_view('input/submit', array('value' => elgg_echo("save")));
echo "<div class=\"juipo-result\"></div>";
