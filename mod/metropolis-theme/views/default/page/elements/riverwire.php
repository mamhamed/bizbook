<?php
/**
 * Post the wire from activity
 * Juipo Metropolis Theme
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 */

$title = '';
$content .= elgg_view_form('thewire/add', array('name' => 'elgg-wire'));

echo elgg_view_module('thewire riverwire', $title, $content);

