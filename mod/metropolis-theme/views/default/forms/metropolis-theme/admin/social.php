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

	if (!isset($plugin->displaysocial)) {
		$plugin->displaysocial = 'yes';
	}
	if (!isset($plugin->socialheading)) {
		$plugin->socialheading = 'Find Us';
	}
	if (!isset($plugin->facebook)) {
		$plugin->facebook = 'https://www.facebook.com/pages/Juipo-Web-Design/407292965974638';
	}
	if (!isset($plugin->twitter)) {
		$plugin->twitter = 'https://twitter.com/juipowebdesign';
	}
	if (!isset($plugin->google)) {
		$plugin->google = 'https://plus.google.com/113003969000791297704';
	}
	if (!isset($plugin->skype)) {
		$plugin->skype = '';
	}
    if (!isset($plugin->html_content_title)) {
		$plugin->html_content_title = 'Custom Content';
	}


echo "<div class=\"label\">" . elgg_echo('metropolis_theme:info:social') . "</div>";
echo "<div>" . elgg_echo('metropolis_theme:info:socialtext') . "</div>";

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:displaysocial');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[displaysocial]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->displaysocial,
));
echo '</div>';

echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:socialheading');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[socialheading]",
	'value' => $plugin->socialheading,
));
echo "</div>";

echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:facebook');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[facebook]",
	'value' => $plugin->facebook,
));
echo "</div>";

echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:twitter');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[twitter]",
	'value' => $plugin->twitter,
));
echo "</div>";

echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:google');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[google]",
	'value' => $plugin->google,
));
echo "</div>";


echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:skype');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[skype]",
	'value' => $plugin->skype,
));
echo "</div>";

echo elgg_view('input/submit', array('value' => elgg_echo("save")));
echo "<div class=\"juipo-result\"></div>";
