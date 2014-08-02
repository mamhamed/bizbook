<?php
/**
 * Walled garden lost password
   * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

$title = elgg_echo('user:password:lost');
$welcome = elgg_echo('juipo:walled_garden:welcome');
$logo = '<img src="'.elgg_get_site_url().'mod/metropolis-theme/graphics/logoBlack.png">';
$body = elgg_view_form('user/requestnewpassword');
echo <<<HTML
<div class="elgg-inner">
<h1 class="elgg-heading-walledgarden">
			$logo
		</h1>
		<p></p>
	<h3>$title</h3>
	$body
</div>
HTML;
