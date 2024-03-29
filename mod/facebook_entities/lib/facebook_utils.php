<?php
/**
 * Used to get facebook user data
 *
 * @access public
 * @return void
 */
function facebook_entities_get_fbdata() {
	elgg_load_library('facebook');
	$fbData=array();
	$facebook = facebookservice_api();
	$fbuser = $facebook->getUser();
    error_log($fbuser);
	if($fbuser) {
		try {
            error_log("/me");
			$fbData['user_profile']= $facebook->api('/me');
            error_log($fbData['user_profile']['name']);
			$fbData['user_profile']['accessToken']= $facebook->getAccessToken();
		} catch (FacebookApiException $e) {
            error_log("error in api calling");
			$fbuser = null;
		}
	}
	if($fbuser) {
        error_log("url is empty");
		$fbData['loginUrl']='';
	} else {
		$fbData['loginUrl'] = $facebook->getLoginUrl(array('canvas' => 1, 'fbconnect' => 0, 'scope'=> 'public_profile, email, user_friends, user_likes, user_status, publish_stream, user_checkins'));
	}
	return $fbData;
}
/**
 * Used to login with facebook
 *
 * @access public
 * @return void
 */
function facebook_entities_login() {
	elgg_load_library('facebook');
	// sanity check
	if (!facebook_entities_allow_sign_on_with_facebook()) {
		forward();
	}
	if(elgg_is_logged_in()) {
		forward();
	}
	$facebook = facebookservice_api();
	$fbData = facebook_entities_get_fbdata();
	if(isset($_GET['error'])) {
		forward();
	} else if(!empty($fbData['loginUrl'])) {
        error_log($fbData['loginUrl']);
		forward($fbData['loginUrl'], 'facebook_entities');
	} else if(empty($fbData['user_profile']['id'])) {
		forward();
	} else {
        error_log("loged in " . $fbData['user_profile']['name']);
        error_log("loged in " . $fbData['user_profile']['id']);
		$options = array(
			'type' => 'user',
			'plugin_user_setting_name_value_pairs' => array(
				'uid' => $fbData['user_profile']['id'],
				'access_token' => $fbData['user_profile']['accessToken'],
			),
			'plugin_user_setting_name_value_pairs_operator' => 'OR',
			'limit' => 0
		);
		$users = elgg_get_entities_from_plugin_user_settings($options);
		if ($users) {
			if (count($users) == 1) {
				try {
                    error_log("trying to log in the user " . $users[0]->username );
					login($users[0]);
					system_message(elgg_echo('facebook_entities:login:success'));
					elgg_set_plugin_user_setting('access_token', $fbData['user_profile']['accessToken'], $users[0]->guid);
					if(empty($users[0]->email)) {
						$user = get_entity($users[0]->guid);
						$user->email = $fbData['user_profile']['email'];
						$user->save();
					}
				} catch (LoginException $e) {
					register_error($e->getMessage());
					forward(REFERER);
				}
			} else {
				system_message(elgg_echo('facebook_entities:login:error'));
			}
			forward();
		} else {
            error_log("add new user");
			$user = facebook_entities_create_update_user($fbData);
			// login new user
			try {
				login($user);
				system_message(elgg_echo('facebook_entities:login:success'));
				forward("profile/{$user->username}", 'facebook_entities');
			} catch (LoginException $e) {
				register_error($e->getMessage());
				forward(REFERER);
			}

		}
		// register login error
		register_error(elgg_echo('facebook_entities:login:error'));
		forward();
	}
}
/**
 * Used to add facebook account to user account
 *
 * @access public
 * @return void
 */

function facebook_entities_add_account() {
	elgg_load_library('facebook');
	$facebook = facebookservice_api();
	$fbData = facebook_entities_get_fbdata();
	if(isset($_GET['error'])) {
		forward();
	} else if(!empty($fbData['loginUrl'])) {
		forward($fbData['loginUrl'], 'facebook_entities');
	} else if(empty($fbData['user_profile']['id'])) {
		forward();
	} else {
		$options = array(
			'type' => 'user',
			'plugin_user_setting_name_value_pairs' => array(
				'uid' => $fbData['user_profile']['id'],
				'access_token' => $fbData['user_profile']['accessToken'],
			),
			'plugin_user_setting_name_value_pairs_operator' => 'OR',
			'limit' => 0
		);
		$users = elgg_get_entities_from_plugin_user_settings($options);
		if (!$users) {
			elgg_set_plugin_user_setting('uid', $fbData['user_profile']['id']);
			elgg_set_plugin_user_setting('access_token', $fbData['user_profile']['accessToken']);
			system_message(elgg_echo('facebook_entities:authorize:success'));
		}
		forward('settings/plugins', 'facebook_entities');
	}
}
/**
 * Used to create user with facebook data
 *
 * @access public
 * @param array $fbData facebook data of user
 * @return void
 */
function facebook_entities_create_update_user($fbData) {
	elgg_load_library('facebook');
	$facebook = facebookservice_api();
	// need facebook account credentials
	// backward compatibility for stalled-development FB plugin
	$user = FALSE;
	$facebook_users = elgg_get_entities_from_metadata(array(
							'type' => 'user',
							'metadata_name_value_pairs' => array(
								'name' => 'facebook_uid',
								'value' => $fbData['user_profile']['id'],
							)
					));
	if (is_array($facebook_users) && count($facebook_users) == 1) {
		// convert existing account
		$user = $facebook_users[0];

		// remove unused metadata
		remove_metadata($user->getGUID(), 'facebook_uid');
		remove_metadata($user->getGUID(), 'facebook_controlled_profile');
	}
	// create new user
	if (!$user) {
		// check new registration allowed
		if (!facebook_entities_allow_new_users_with_facebook()) {
			register_error(elgg_echo('registerdisabled'));
			forward();
		}
		$email= $fbData['user_profile']['email'];
		$users= get_user_by_email($email);
		if(!$users) {
			// Elgg-ify facebook credentials
			if(!empty($fbData['user_profile']['username'])) {
				$username = $fbData['user_profile']['username'];
			} else {
				$username = str_replace(' ', '', strtolower($fbData['user_profile']['name']));
			}
			$usernameTmp =$username;
			while (get_user_by_username($username)) {
				$username = $usernameTmp . '_' . rand(1000, 9999);
			}
			$password = generate_random_cleartext_password();
			$name = $fbData['user_profile']['name'];
			$user = new ElggClient();
			$user->username = $username;
			$user->name = $name;
			$user->email = $email;
			$user->access_id = ACCESS_PUBLIC;
			$user->salt = generate_random_cleartext_password();
			$user->password = generate_user_password($user, $password);
			$user->owner_guid = 0;
			$user->container_guid = 0;
			if (!$user->save()) {
				register_error(elgg_echo('registerbad'));
				forward();
			} else {
				// send mail to user
				send_user_password_mail($email, $name, $username, $password);

				// post status on facebook
				facebook_entities_post_status($fbData);

				// pull in facebook icon
				$url = 'https://graph.facebook.com/' . $fbData['user_profile']['id'] .'/picture?type=large';
				facebook_entities_update_user_avatar($user, $url);
			}
		} else {
			$user= $users[0];
		}
	}
	// set facebook services tokens
	elgg_set_plugin_user_setting('uid', $fbData['user_profile']['id'], $user->guid);
	elgg_set_plugin_user_setting('access_token', $fbData['user_profile']['accessToken'], $user->guid);
	return $user;
}
/**
 * Used to Pull in the latest avatar from facebook.
 *
 * @access public
 * @param array $user
 * @param string $file_location
 * @return void
 */
function facebook_entities_update_user_avatar($user, $file_location) {
	global $CONFIG;
	$tempfile=$CONFIG->dataroot.$user->getGUID().'img.jpg';
	$imgContent = file_get_contents($file_location);
	$fp = fopen($tempfile, "w");
	fwrite($fp, $imgContent);
	fclose($fp);
	$sizes = array(
		'topbar' => array(16, 16, TRUE),
		'tiny' => array(25, 25, TRUE),
		'small' => array(40, 40, TRUE),
		'medium' => array(100, 100, TRUE),
		'large' => array(200, 200, FALSE),
		'master' => array(550, 550, FALSE),
	);

	$filehandler = new ElggFile();
	$filehandler->owner_guid = $user->getGUID();
	foreach ($sizes as $size => $dimensions)
	{
		$image = get_resized_image_from_existing_file(
			$tempfile,
			$dimensions[0],
			$dimensions[1],
			$dimensions[2]
		);

		$filehandler->setFilename("profile/$user->guid$size.jpg");
		$filehandler->open('write');
		$filehandler->write($image);
		$filehandler->close();
	}

	// update user's icontime
	$user->icontime = time();
	return TRUE;
}
/**
 * Used to post synched status on facebook.
 *
 * @access public
 * @param array $fbData facebook data of user
 * @return void
 */
function facebook_entities_post_status($fbData) {
	if(facebook_entities_allow_post_on_facebook()) {
		elgg_load_library('facebook');
		$facebook = facebookservice_api();
		$site = elgg_get_site_entity();
		$uid = $fbData['user_profile']['id'];
		$permissions = $facebook->api('/'.$uid.'/permissions');
		if(array_key_exists('publish_stream', $permissions['data'][0])) {
			$message = $user->name . ' just synched his/her facebook account with ' . $site->name;
			$params = array (
				'link' => elgg_get_site_url(),
				'message' => $message,
				'picture' => elgg_get_site_url() .'_graphics/elgg_logo.png',
				'description' => $site->name . ' is the social network for connecting people.'
			);
			try {
				$status = $facebook->api('/'.$uid.'/feed/','POST',$params);
			} catch (FacebookApiException $e){

			}
		}
	}
}
/**
 * Used to Create facebook object with app id and secret code
 *
 * @access public
 * @return object
 */
function facebookservice_api() {
	elgg_load_library('facebook');
	return new Facebook(array(
		'appId' => elgg_get_plugin_setting('consumer_key', 'facebook_entities'),
		'secret' => elgg_get_plugin_setting('consumer_secret', 'facebook_entities'),
	));
}
/**
 * Used to Remove facebook access for the currently logged in user.
 *
 * @access public
 * @return void
 */
function facebook_entities_revoke() {
	// unregister user's access tokens
	elgg_unset_plugin_user_setting('uid');
	elgg_unset_plugin_user_setting('access_token');

	system_message(elgg_echo('facebook_entities:revoke:success'));
	forward('settings/plugins', 'facebook_entities');
}
/**
 * Checks if this site is accepting new users.
 * Admins can disable manual registration, but some might want to allow
 *
 * @access public
 * @return void
 */
function facebook_entities_allow_new_users_with_facebook() {
	$site_reg = elgg_get_config('allow_registration');
	$facebook_reg = elgg_get_plugin_setting('new_users', 'facebook_entities');
	if ($site_reg || (!$site_reg && $facebook_reg == 'yes')) {
		return true;
	}
	return false;
}
/**
 * check post on facebook is allowed or not
 * Admins can disable or enable
 *
 * @access public
 * @return void
 */
function facebook_entities_allow_post_on_facebook() {
	return elgg_get_plugin_setting('post_onfb', 'facebook_entities') == 'yes';
}
/**
 * check admin has enabled Sign-On-With-Facebook
 * Admins can disable or enable
 *
 * @access public
 * @return void
 */
function facebook_entities_allow_sign_on_with_facebook() {
	if (!$consumer_key = elgg_get_plugin_setting('consumer_key', 'facebook_entities')) {
		return false;
	}
	if (!$consumer_secret = elgg_get_plugin_setting('consumer_secret', 'facebook_entities')) {
		return false;
	}
	return elgg_get_plugin_setting('sign_on', 'facebook_entities') == 'yes';
}


function post_to_timeline($msg){
echo <<< HTML
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : "903078693040885",
          xfbml      : true,
          version    : "v2.0"
        });

       var myparivacy={value:"SELF"};

       FB.login(function(){
        FB.api("/me/feed", "post", {message: "$msg", privacy:myparivacy});
      }, {scope: "publish_actions"});

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

}