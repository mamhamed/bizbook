<?php
elgg_register_event_handler('init', 'system', 'FBentities_init');

function FBentities_init(){
   elgg_register_page_handler('FBentities','FBentities_page_handler');
}

function FBentities_page_handler($segments){
  elgg_load_library('facebook');
  if ($segments[0] == "viewFBlikes"){
     include elgg_get_plugins_path() . 'FBentities/pages/FBentities/viewFBlikes.php';
  }
  else if ($segments[0] == "viewFBplaces"){
      include elgg_get_plugins_path() . 'FBentities/pages/FBentities/viewFBPlaces.php';
  }
  else{
     include elgg_get_plugins_path() . 'FBentities/pages/FBentities/viewFBfriends.php';
  }
  true;
}
