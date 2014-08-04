<?php
/**
 * Walled garden registration
   * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

$title = elgg_echo('register');
$welcome = elgg_echo('juipo:walled_garden:register');
$logo = '<img src="'.elgg_get_site_url().'mod/metropolis-theme/graphics/logoBlack.png">';
$body = elgg_view_form('register', array(), array(
	'friend_guid' => (int) get_input('friend_guid', 0),
	'invitecode' => get_input('invitecode'),
));

echo <<<__HTML
<div class="elgg-inner">
<h1 class="elgg-heading-walledgarden">
			$logo
		</h1>
	<h2>$title</h2>
			<p>$welcome</p>
	$body
</div>
__HTML;
