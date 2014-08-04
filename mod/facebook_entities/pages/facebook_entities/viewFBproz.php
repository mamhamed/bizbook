<?php
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
$title = "Facebook Top Choices";

//start building main colum of the page
$content = elgg_view_title($title);

$fbData=array();
$facebook = facebookservice_api();
$fbuser = $facebook->getUser();

$user = elgg_get_logged_in_user_entity();


//get facebook places
if (is_facebook_entities_update($user->fb_last_pull)){
    //get fb likes
    if($fbuser){
        try{
            $likes = $facebook->api('/me/likes');
        }
        catch (FacebookApiException $e) {
            $fbuser = null;
            echo "error in FB connection";
        }
    }
    $category_like = get_facebook_likes($likes);


    //get fb places
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

    $fbcategories = array_merge($category_like, $category_place);
    //store the array as json in metadata
    $user->fb_place_data = json_encode($fbcategories);
    //recored the update time
    $user->fb_last_pull = $user->prev_last_login;
}
else
{
    //decode json
    $fbcategories = json_decode($user->fb_place_data,true);
}


//create a table to show the entities
$i = 1;
$categories_name = array_keys($fbcategories);
foreach ($categories_name as $catname){
    if (strpos($catname,'Restaurant') === false &&
        strpos($catname,'Hotel') === false &&
        strpos($catname,'Doctor') === false
    ){
        continue;
    }

    $category = $fbcategories[$catname];

    $content .= '<style> h3 { background-color: #b0c4de;}</style>';
    $content .= '<div style="width:700px;height:20px;border:1px solid #000 ;">';
    $content .= '<h3>' .  $catname . '</h3>';
    $content .= '</div><br>';

    $content .= '<table class="fixed"><col width="150px"/><tr>';
    foreach ($category as $cat){
        $name = $cat["name"];
        $imgsrc = $cat["imgsrc"];
        $id = $cat["id"];
        $content .= '<td>';
        $content .= '<div class="pic">';
        $content .= '<img height = 100 src=' .$imgsrc .'>';
        $content .= '</div>';
        //$content .= '<div class="picName">'.$name.'</div>';
        $content .= '<div class="picName">'.'<a href='.$cat["elggAddress"].'>'.$name.'</a></div>';
        $content .= '<div class="picName">'.$id.'</div>';

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
