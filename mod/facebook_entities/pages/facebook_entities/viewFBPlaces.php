<?php
E_DEPRECATED;
/**
 * User: hamed
 * email: mhfirooz@gmail.com
 * Date: 8/1/14
 * Time: 12:01 AM
 *
 * This is used to pull facebook places
 */

//make sure only logged in users see this page
gatekeeper();

//set the context to be simialr to friends
elgg_set_context('friends');
echo elgg_get_logged_in_user_entity();

//set title
$title = "Facebook Places";

//start building main colum of the page
$content = elgg_view_title($title);

$fbData=array();
$facebook = facebookservice_api();
$fbuser = $facebook->getUser();

$user = elgg_get_logged_in_user_entity();


//get facebook places
if (is_facebook_entities_update($user->fb_place_last_pull)){
    if($fbuser){
        try{
            $places = $facebook->api('/me/tagged_places');
        }
        catch (FacebookApiException $e) {
            $fbuser = null;
            echo "error in FB connection";
        }
    }

    $category_place = get_facebook_places($places, $facebook);

    //store the array as json in metadata
    $user->fb_place_data = json_encode($category_place);

    //recored the update time
    $user->fb_place_last_pull = $user->prev_last_login;
}
else
{
    //decode json
    $category_place = json_decode($user->fb_place_data,true);
}


//create a table to show the entities
$i = 1;
$categories_name = array_keys($category_place);
foreach ($categories_name as $catname){
    $cat_place = $category_place[$catname];

    $content .= '<style> h3 { background-color: #b0c4de;}</style>';
    $content .= '<div style="width:700px;height:20px;border:1px solid #000 ;">';
    $content .= '<h3>' .  $catname . '</h3>';
    $content .= '</div><br>';

    $content .= '<table class="fixed"><col width="150px"/><tr>';
    foreach ($cat_place as $place){
        $plcname = $place["name"];
        $imgsrc = $place["imgsrc"];
        $plcid = $place["id"];
        $content .= '<td>';
        $content .= '<div class="pic">';
        $content .= '<img height = 100 src=' .$imgsrc .'>';
        $content .= '</div>';
        $content .= '<div class="picName">'.$plcname.'</div>';
        $content .= '<div class="picName">'.$plcid.'</div>';

        $content .= '</td>';
        if ($i % 4 == 0){
            $content .= '<col width="150px"/></tr>';
            $content .= '<col width="150px"/><tr>';
            $i = 1;
        }else{
            $i = $i + 1;
        }
    }
    $content .= '</tr></table>';
    $content .= '<br><br><br>';
}

// optionally, add the content for the sidebar
$sidebar = "";

//layout page
$body = elgg_view_layout('one_sidebar', array('content' => $content, 'sidebar' => $sidebar));

//draw the page
echo elgg_view_page($title, $body); 
