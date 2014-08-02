<?php
/*
 * Main help index page - list help categories
 */

$title = elgg_echo('help:categories');

$content = "hello, world";

$body = elgg_view_layout('one_column', array('content' => $content));

echo elgg_view_page($title, $body);