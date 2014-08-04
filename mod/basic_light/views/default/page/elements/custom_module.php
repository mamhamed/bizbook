<?php 
/**
 * Custom Content
 *
 */

$plugin = elgg_get_plugin_from_id('basic_light');
$html = $plugin->html_content;

$title = elgg_echo("basic_light:demo:title"); 
//$text = elgg_echo("basic_light:demo:text");

echo elgg_view_module('aside', $title, $html);
