<?php
elgg_register_event_handler('init', 'system', 'facebook_entities_init');

function facebook_entities_init(){
   elgg_register_page_handler('facebook_entities','facebook_entities_page_handler');
   elgg_load_library('facebook');

    $lib = elgg_get_plugins_path() . "/facebook_entities/lib/get_facebook_entities.php";
    elgg_register_library('get_facebook_entities', $lib);
    elgg_load_library('get_facebook_entities');
}

function facebook_entities_page_handler($segments){

    $user = elgg_get_logged_in_user_entity();

    if ($segments[0] == $user->username){
        if ($segments[1] == "viewFBlikes"){
            include elgg_get_plugins_path() . 'facebook_entities/pages/facebook_entities/viewFBlikes.php';
        }
        else if ($segments[1] == "viewFBplaces"){
            include elgg_get_plugins_path() . 'facebook_entities/pages/facebook_entities/viewFBPlaces.php';
        }
        else{
            include elgg_get_plugins_path() . 'facebook_entities/pages/facebook_entities/viewFBfriends.php';
        }
        true;
    }
    else{
        false;
    }

}
