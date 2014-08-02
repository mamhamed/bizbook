<?php 
/**
 * Custom Content
 * Juipo Metropolis Theme
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 *
 */

$plugin = elgg_get_plugin_from_id('metropolis-theme');
$body = $plugin->html_content;

$title = $plugin->html_content_title;


echo elgg_view_module('aside', $title, $body);
