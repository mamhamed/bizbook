<?php

$category = get_input('category', 'getting_started');

$title = elgg_echo("help:title:$category");

elgg_push_breadcrumb(elgg_echo('help'), 'help');
elgg_push_breadcrumb($title);

$options = array(
    'type' => 'object',
    'subtype' => 'help',
    'metadata_name' => 'category',
    'metadata_value' => $category,
    'limit' => 20,
    'full_view' => true,
    'list_class' => 'help-list'
);


$content = elgg_list_entities_from_metadata($option);

$params = array(
    'content' => $content,
    'title' => $title,
    'filter' => false);

$body = elgg_view_layout('content', $params);
echo elgg_view_page($title, $body);