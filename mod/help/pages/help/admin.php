<?php
admin_gatekeeper();
elgg_set_context('admin');

$title = elgg_echo('help:admin');

$content = elgg_view_title($title);

$content .= elgg_view_form('help/save');

$body = elgg_view_layout('admin',array('content' => $content));

echo elgg_view_page($title, $body, 'admin');