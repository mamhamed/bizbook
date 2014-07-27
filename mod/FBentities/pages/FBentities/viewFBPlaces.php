<?php
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
if ($user->fb_place_last_pull  < $user->prev_last_login){
    if($fbuser){
        try{
            $places = $facebook->api('/me/tagged_places');;//, array('limit' => 3));
        }
        catch (FacebookApiException $e) {
            $fbuser = null;
            echo "error in FB connection";
        }
    }


    $category_place = array();
    foreach ($places["data"] as $value) {
        $pageid = $value["place"]["id"];
        $myplace = $facebook->api($pageid);
        $ppic = $facebook->api($pageid.'/picture?redirect=false');
        $imgsrc = $ppic["data"]["url"];

        $allcategory = $myplace["category_list"];
        //add category
        foreach ($allcategory as $categorya){
            $category = $categorya["name"];
            $obj = array('name' => $myplace["name"], 'imgsrc' => $imgsrc, 'fbid' => $myplace["id"]);
            if (!isset($category_place[$category])){
                $category_place[$category] = array($obj);
            }else{
                array_push($category_place[$category], $obj);
            }
        }
    }
    //store the array as json in metadata
    $user->fb_place_data = json_encode($category_place);
    //echo $user->fb_place_data;
    $user->fb_place_last_pull = $user->prev_last_login;
}
else
{    //decode json
    //echo $user->fb_place_data;
    $category_place = json_decode($user->fb_place_data,true);
}



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


    //print_r($category_place);


// optionally, add the content for the sidebar
$sidebar = "";

//layout page
$body = elgg_view_layout('one_sidebar', array('content' => $content, 'sidebar' => $sidebar));

//draw the page

echo elgg_view_page($title, $body); 
