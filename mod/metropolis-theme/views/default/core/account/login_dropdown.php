<?php
/**
 * Elgg drop-down login form
   * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

if (elgg_is_logged_in()) {
	return true;
}

$login_url = elgg_get_site_url();
if (elgg_get_config('https_login')) {
	$login_url = str_replace("http:", "https:", elgg_get_site_url());
}

?>
<div id="login-dropdown">
	<?php 
		echo elgg_view('output/url', array(
			'href' => '#login-dropdown-box',
			'rel' => 'toggle',
			'class' => 'elgg-button elgg-button-dropdown float',
			'text' => elgg_echo('login'),
			'span_after' => true,
		    'icon_class_after' => 'elgg-icon-sync-white',
		    'link_icon_after' => 'elgg-icon-icon-swapright onright',
		)); 
		
	?>
	
	<?php 
	    if (elgg_get_config('allow_registration')) {
		echo elgg_view('output/url', array(
			'href' => '/register',
			'class' => 'elgg-button elgg-button-dropdown register float',
			'text' => elgg_echo('register'),
			'span_after' => true,
		    'icon_class_after' => 'elgg-icon-sync-white',
		    'link_icon_after' => 'elgg-icon-icon-swapright onright',
		)); 
		}
	?>
</div>

	<?php 
		$body = elgg_view_form('login', array('action' => "{$login_url}action/login"), array('returntoreferer' => TRUE));
		echo elgg_view_module('dropdown', '', $body, array('id' => 'login-dropdown-box')); 
	?>