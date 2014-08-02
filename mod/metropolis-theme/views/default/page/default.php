<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 * Juipo Metropolis Theme
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title']       The page title
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin') {
	if (get_input('handler') != 'admin') {
		elgg_deprecated_notice("admin plugins should route through 'admin'.", 1.8);
	}
	elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

// render content before head so that JavaScript and CSS can be loaded. See #4032
$topbar = elgg_view('page/elements/topbar', $vars);
$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));
$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
$slider = elgg_view('page/elements/slider', $vars);
$body = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

// Set the content type
header("Content-type: text/html; charset=UTF-8");

$lang = get_current_language();

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
<?php echo elgg_view('page/elements/head', $vars); ?>
<?php
$customstyles = elgg_get_plugin_setting('customstyles', 'metropolis-theme');
 if (elgg_get_plugin_setting('customstyles', 'metropolis-theme') != '') { 
 echo '<style> 
    <!--
	'.$customstyles.
    '-->
   </style>'; 
 } ?>
</head>
<body>
<div class="elgg-page elgg-page-default">
	<div class="elgg-page-messages">
		<?php echo $messages; ?>
	</div>
	
	<?php if (elgg_is_logged_in() && elgg_get_plugin_setting('topbar', 'metropolis-theme') == 'yes'){ ?>
	<div class="elgg-page-topbar">
		<div class="elgg-inner">
			<?php echo $topbar; ?>
		</div>
	</div>
	<?php } ?>
	<div class="elgg-page-header">
		<div class="elgg-inner">
			<?php echo $header; ?>
		</div>
	</div>
	<div class="elgg-page-globalnav">
		<div class="elgg-inner">
			<?php echo $navbar; ?>
		</div>
	</div>
	<div class="elgg-page-slidemenu">
		<div class="elgg-inner">
			<?php echo elgg_view_menu('account', array('sort_by' => 'priority', array('elgg-menu-hz'))); ?>
		</div>
	</div>
	<!--- Responsive Slider --->
	<div class="elgg-page-body-slider">
	
	<?php if (!elgg_is_logged_in() && elgg_get_context() == 'main' && elgg_get_plugin_setting('slider', 'metropolis-theme') == 'yes'){
	echo $slider;	
	}
	?>
	</div>
	<div class="elgg-page-body">
		<div class="elgg-inner">
			<?php echo $body; ?>
		</div>
	</div>
	<div class="elgg-page-footer">
		<div class="elgg-inner">
			<?php echo $footer; ?>
		</div>
	</div>
</div>
<?php echo elgg_view('page/elements/foot'); ?>
<!-- Custom Elgg Theme by Juipo Web Design - http://juipo.com/,  sponsored by http://www.mobilenetinc.com/, http://www.skeletonkeyantique.com/ and http://www.cheap-bmw-parts.com/ -->
</body>
</html>