<?php
/**
 * Created by PhpStorm.
 * User: hamed
 * Date: 8/2/14
 * Time: 3:28 PM
 */

elgg_set_context('friends');
$username = elgg_get_logged_in_user_entity()->username;
$facebook = facebookservice_api();
$fbuser = $facebook->getUser();
$fbaccess =  $facebook->getAccessToken();
$method = "apprequests";
$appID = 903078693040885;

echo <<< HTML
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : "903078693040885",
          xfbml      : true,
          version    : "v2.0"
        });

       FB.login(function(){}, {scope: "publish_actions"});
      //  FB.api("/me/feed", "post", {message: "cheghadr khoshbakhtam!"});
      //}
       FB.ui({
        method: '$method',
        message: "hello",
        display: "iframe",
        access_token: '$fbaccess'
      }, function(response){
            console.log(response);
            window.location = './viewFBfriends';
      });

      //FB.login(function(){
      //  FB.api("/me/feed", "post", {message: "cheghadr khoshbakhtam!"});
      //}, {scope: "publish_actions"});

      };
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk/debug.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, "script", "facebook-jssdk"));
    </script>
HTML;

$sidebar = "";
$content = "";

//layout page
$body = elgg_view_layout('one_sidebar', array('content' => $content, 'sidebar' => $sidebar));

//draw the page
echo elgg_view_page($title, $body);

