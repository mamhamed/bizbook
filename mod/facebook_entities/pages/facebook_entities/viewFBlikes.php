<?php
/**
 * User: hamed
 * email: mhfirooz@gmail.com
 * Date: 8/1/14
 * Time: 12:01 AM
 *
 * This is used to pull facebook likes
 */

//make sure only logged in users see this page
gatekeeper();

//set the context to be simialr to friends
elgg_set_context('friends');
echo elgg_get_logged_in_user_entity();

//set title
$title = "Facebook Friends";

//start building main colum of the page
$content = elgg_view_title($title);

$fbData=array();
$facebook = facebookservice_api();
$fbuser = $facebook->getUser();

$user = elgg_get_logged_in_user_entity();

//get facebook likes
if (is_facebook_entities_update($user->fb_like_last_pull)){
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

    //store the array as json in metadata
    $user->fb_like_data = json_encode($category_like);

    $user->fb_like_last_pull = $user->prev_last_login;
}
else
{
    //decode json
    $category_like = json_decode($user->fb_like_data,true);
}


//create a table to show FB entities
$categories_name = array_keys($category_like);
foreach ($categories_name as $catname){
    $cat_like = $category_like[$catname];

    $content .= '<style> h3 { background-color: #b0c4de;}</style>';
    $content .= '<div style="width:700px;height:20px;border:1px solid #000 ;">';
    $content .= '<h3>' .  $catname . '</h3>';
    $content .= '</div><br>';

    $i = 1;
    $content .= '<table class="fixed"><col width="150px"/><tr>';
    foreach ($cat_like as $place){
        $plcname = $place["name"];
        $imgsrc = $place["imgsrc"];
        $plcid = $place["id"];
        $content .= '<td>';
        $content .= '<div class="pic">';
        $content .= '<img height = 100 src=' .$imgsrc .'>';
        $content .= '</div>';
        $content .= '<div class="picName">'.'<a href='.$place["elggAddress"].'>'.$plcname.'</a></div>';
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

