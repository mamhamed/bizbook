<?php
/**
 * Juipo custom settings save
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

$plugin = elgg_get_plugin_from_id('metropolis-theme');

$params = get_input('params');
foreach ($params as $k => $v) {
	if (!$plugin->setSetting($k, $v)) {
		register_error(elgg_echo('plugins:settings:save:fail', array('metropolis-theme')));
		forward(REFERER);
	}
}

foreach ($params as $name => $value) {
	$plugin->setSetting($name, $value);
}

$json = array('success' => TRUE, 'message' => '');
echo json_encode($json);
system_message(elgg_echo('plugins:settings:save:ok', array('metropolis-theme')));
