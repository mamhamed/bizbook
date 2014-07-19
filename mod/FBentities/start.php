<?php
elgg_register_event_handler('init', 'system', 'FBentities_init');

function FBentities_init(){
   elgg_register_page_handler('FBentities','FBentities_page_handler');
}

function FBentities_page_handler($segments){
  elgg_load_library('facebook');
  if ($segments[0] == "likes"){
     include elgg_get_plugins_path() . 'FBentities/pages/FBentities/viewFBlikes.php';
  }
  else{
     include elgg_get_plugins_path() . 'FBentities/pages/FBentities/viewFBfriends.php';
  }
  true;
}
