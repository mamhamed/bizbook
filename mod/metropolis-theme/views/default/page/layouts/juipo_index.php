<?php
/**
 * juipo index layout
 * 
 * Juipo Metropolis Theme
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 */
?>

<?php

if (!elgg_is_logged_in()){	

	echo elgg_view("page/elements/front");

} else { 
	
	forward('activity');
}



