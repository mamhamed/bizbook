<?php
elgg_register_event_handler('init', 'system', 'testmeta_init');

function testmeta_init(){
   elgg_register_page_handler('metaTest','testmeta_page_handler');
}

function testmeta_page_handler($segments){
  $user = elgg_get_logged_in_user_entity();
  $guid = elgg_get_logged_in_user_guid();

  $myfriends = $user->getFriends();

  foreach ($myfriends as $f){
      //$relationship_entity = check_entity_relationship($guid, 'friend', $f->guid);
      $relationship_entity = elgg_get_entities_from_relationship(array(relationship =>'friend',
          relationship_guid => $user->guid,
          inverse_relationship => false));

      print_r($relationship_entity);
      foreach ($relationship_entity as $rel){
          $rel->help = "yes";
      //$relationship_entity->att = "perfect";
      }
      //$relationship_entity->save();

      $relationship_entity2 = check_entity_relationship($guid, 'friend', $f->guid);
      echo $relationship_entity2->help;

  }

    //print_r($myfriends);

    /*$relationship_entity = check_entity_relationship($guid, 'friend', $f->guid);
    foreach ($relationship_entity as $value){
        $value->tag = "good";
    }

    print_r($relationship_entity);*/


    //$myentities2 = get_entity_relationships($guid);

    //print_r($myentities);

  true;
}
