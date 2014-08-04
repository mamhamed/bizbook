<?php
/**
 * User: hamed
 * email: mhfirooz@gmail.com
 * Date: 8/1/14
 * Time: 12:01 AM
 */

function get_facebook_places($places, $facebook){
    $category_place = array();
    foreach ($places["data"] as $value) {
        $pageid = $value["place"]["id"];
        $myplace = $facebook->api($pageid);
        $pagename = $myplace["name"];
        $ppic = $facebook->api($pageid.'/picture?redirect=false');
        $imgsrc = $ppic["data"]["url"];
        $page_register_name = create_fb_biz_profile($pageid, $pagename);
        $allcategory = $myplace["category_list"];
        //add category
        foreach ($allcategory as $categorya){
            $category = $categorya["name"];
            $obj = array('name' => $pagename, 'imgsrc' => $imgsrc, 'fbid' => $pageid, 'elggAddress' => 'http://localhost/elgg/profile/'.$page_register_name);
            if (!isset($category_place[$category])){
                $category_place[$category] = array($obj);
            }else{
                array_push($category_place[$category], $obj);
            }
        }
    }

    return $category_place;

}

function get_facebook_likes($likes){
    $category_like = array();
    foreach ($likes["data"] as $value) {
        $pageid = $value["id"];
        $pagename = $value["name"];

        //create biz page by fb info
        $page_register_name = create_fb_biz_profile($pageid, $pagename);

        $imgsrc = 'https://graph.facebook.com/' . $value["id"] . '/picture';

        $category = $value["category"];

        $obj = array('name' => $pagename, 'imgsrc' => $imgsrc, 'fbid' => $pageid, 'elggAddress' => 'http://localhost/elgg/profile/'.$page_register_name);
        if (!isset($category_like[$category])){
            $category_like[$category] = array($obj);
        }else{
            array_push($category_like[$category], $obj);

        }
    }

    return $category_like;
}

function create_fb_biz_profile($pageid, $pagename){
    $user = elgg_get_logged_in_user_entity();
    $page_register_name = preg_replace('/\s+/', '', $pagename);//str_replace(' ', '', $pagename);
    if (ctype_alnum($page_register_name)){
        $page_user = get_user_by_username($page_register_name);
        error_log($page_user->username);
        if ($page_user == null){
            $pageGUID = register_user($page_register_name, '1234567', $pagename, $pageid . '@facebook.com' , "business_profile_type");
            $user->addFriend($pageGUID);
            $page_profile_pic = 'https://graph.facebook.com/' . $pageid .'/picture?type=large';
            facebook_entities_update_user_avatar($page_user, $page_profile_pic);
        }
    }

    return $page_register_name;
}


function is_facebook_entities_update($facebook_entity){
    $user = elgg_get_logged_in_user_entity();
    return ($facebook_entity  < $user->prev_last_login);
}