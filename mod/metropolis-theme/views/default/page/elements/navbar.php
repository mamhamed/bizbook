<?php
/**
 * Elgg page navbar
 * 
 */

// drop-down login
echo elgg_view('core/account/login_dropdown');

$plugin = elgg_get_plugin_from_id('metropolis-theme');
// link back to main site.
echo elgg_view('page/elements/header_logo-m', $vars);

global $CONFIG;
if ($CONFIG->walled_garden && !elgg_is_logged_in()) { 
} else {
echo elgg_view_menu('dropaccount', array('sort_by' => 'priority','class' => 'dropaccount-desk', array('elgg-menu-hz')));
if (elgg_is_logged_in()	|| $plugin->sitemenu == 'yes'){

?>

<a class="elgg-button-nav" rel="toggle" href=".elgg-nav-collapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>

<div class="elgg-nav-collapse">
	<?php echo elgg_view_menu('site'); ?>
	
</div>
			
<?php
}
}
?>