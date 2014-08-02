<?php
/**
 * Walled garden login
   * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

$title = elgg_get_site_entity()->name;
$welcome = elgg_echo('juipo:walled_garden:welcome');
$logo = '<img src="'.elgg_get_site_url().'mod/metropolis-theme/graphics/logoBlack.png">';
$menu = elgg_view_menu('walled_garden', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-general elgg-menu-hz',
));

$login_box = elgg_view('core/account/login_box', array('module' => 'walledgarden-login'));

echo <<<HTML
<div class="elgg-col elgg-col-1of2">
	<div class="elgg-inner">
		<h1 class="elgg-heading-walledgarden">
			$logo
		</h1>
		<p>$welcome</p>
		<br/>
		$menu
	</div>
</div>
<div class="elgg-col elgg-col-1of2">
	<div class="elgg-inner">
		$login_box
	</div>
</div>
HTML;
