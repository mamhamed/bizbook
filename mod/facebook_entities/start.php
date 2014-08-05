<?php
elgg_register_event_handler('init', 'system', 'facebook_entities_init');

function facebook_entities_init(){

    //uncomment for debuging
    //ini_set("log_errors", 1);
    //ini_set("error_log", "/tmp/facebook-php-error.log");

    $base = elgg_get_plugins_path() . 'facebook_entities';

    elgg_register_library('facebook', "$base/vendors/facebook/facebook.php");
    elgg_load_library('facebook');

    elgg_register_library('facebook_utils', "$base/lib/facebook_utils.php");
    elgg_load_library('facebook_utils');

    elgg_register_library('get_facebook_entities', "$base/lib/get_facebook_entities.php");
    elgg_load_library('get_facebook_entities');

    elgg_register_page_handler('facebook_entities','facebook_entities_page_handler');

    //extend view to include fb login
    elgg_extend_view('css/elgg', 'facebook_entities/css');
    elgg_extend_view('login/extend', 'facebook_entities/login');
}

function facebook_entities_page_handler($segments){

    $user = elgg_get_logged_in_user_entity();

    switch ($segments[0]) {
        case 'login':
            facebook_entities_login();
            break;
        case $user->username:
            if ($segments[1] == "viewFBproz"){
                include elgg_get_plugins_path() . 'facebook_entities/pages/facebook_entities/viewFBproz.php';
            }else if ($segments[1] == "viewFBinvitation"){
                include elgg_get_plugins_path() . 'facebook_entities/pages/facebook_entities/viewFBinvitation.php';
            }
            else{
                include elgg_get_plugins_path() . 'facebook_entities/pages/facebook_entities/viewFBfriends.php';
            }

    }

    return true;

}



/**
 * Send password for new user who is registered using facebook connect
 *
 * @param $email
 * @param $name
 * @param $username
 * @param $password
 */

function send_user_password_mail($email, $name, $username, $password) {
    $site = elgg_get_site_entity();
    $email = trim($email);

    // send out other email addresses
    if (!is_email_address($email)) {
        return false;
    }

    $message = elgg_echo('facebook_entities:email:body', array(
            $name,
            $site->name,
            $site->url,
            $username,
            $email,
            $password,
            $site->name,
            $site->url
        )
    );

    $subject = elgg_echo('facebook_connect:email:subject', array($name));

    // create the from address
    $site = get_entity($site->guid);
    if (($site) && (isset($site->email))) {
        $from = $site->email;
    } else {
        $from = 'noreply@' . get_site_domain($site->guid);
    }

    elgg_send_email($from, $email, $subject, $message);
}
