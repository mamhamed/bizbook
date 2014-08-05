<?php
/**
 * User: hamed
 * email: mhfirooz@gmail.com
 * Date: 8/1/14
 * Time: 12:01 AM
 *
 * This is used to pull the facebook friends
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

   if($fbuser){
      try{
         $friends = $facebook->api('/me/friends');
      }
      catch (FacebookApiException $e) {
         $fbuser = null;
	 echo "error in FB connection";
      }
   }

   $content .= '<table class="fixed"><col width="200px"/><tr>';
   $i = 1;
   foreach ($friends["data"] as $value) {
      $content .= '<td>';
      $content .= '<div class="pic">';
      $content .= '<img height = 100 src="https://graph.facebook.com/' . $value["id"] . '/picture"/ >';
      $content .= '</div>';
      $content .= '<div class="picName">'.$value["name"].'</div>'; 
      //$content .= '<div>' . "(" . '<b><i>' . $value["category"] . '</i></b>' . ")" . '</div>';
      $content .= '</td>';
      if ($i % 4 == 0){
         $content .= '</tr>';
	 $content .= '<tr>';
	 $i = 1;
      }else{
         $i = $i + 1;
      }
   }
   $content .= '</tr></table>';



// optionally, add the content for the sidebar
//$sidebar = "";

//layout page
$body = elgg_view_layout('one_sidebar', array('content' => $content));//, 'sidebar' => $sidebar));

//draw the page

echo elgg_view_page($title, $body); 
