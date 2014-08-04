<?php
/**
 * Walled garden page shell
 *
 * Used for the walled garden index page
 */
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
</head>
<body>
<div class="elgg-page elgg-page-default">
	<div class="elgg-page-messages">
		<?php echo $messages; ?>
	</div>
	
	
	<div class="elgg-page-globalnav">
		<div class="elgg-inner">
			<?php echo $navbar; ?>
		</div>
	</div>
	<div class="elgg-page-header">
		<div class="elgg-inner">
			<?php echo elgg_view_menu('account', array('sort_by' => 'priority', array('elgg-menu-hz'))); ?>
		</div>
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