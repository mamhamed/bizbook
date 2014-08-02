<?php
$category = get_input('category');
$question = get_input('question');

$answer = get_input('answer');
$access_id = get_input('access_id');

$result = help_save_topic($question, $answer, $category, $access_id);

if (!$result){
    register_error(elgg_echo('help:error:no_save'));
}
else{
    system_message(elgg_echo('help:status:save'));
}

forward(REFERER);