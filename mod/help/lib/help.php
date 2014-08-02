<?php

function help_get_categories() {
    $codes = array(
      'resturants',
        'professional'
    );

    $categories = array();

    foreach ($codes as $code){
        $categories[$code] = elgg_echo('help:title:$code');
    }

    return categories;
}


function help_save_topic($question, $answer, $category, $access_id){
    $help = new ElggObject();
    $help->subtype = 'help';
    $help->title = $question;
    $help->description = $answer;
    $help->access_id = $access_id;

    $help->category = $category;

    $guid = $help->save();

    if (!guid)
        return false;

    return true;


}