<?php
/**
 * Elgg header logo
 * Juipo Options Elgg Theme
	 *
	 * @package Juipo Options
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2012
	 * @link http://juipo.com/
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
$site_name_short = elgg_get_plugin_setting('site_name', 'metropolis-theme');
$logo_url = elgg_get_plugin_setting('logo_url', 'metropolis-theme');

if (elgg_get_plugin_setting('show_logo', 'metropolis-theme') == 'no') {
?>

	<?php if (elgg_get_plugin_setting('site_name', 'metropolis-theme') == '') { ?>
	<a title="<?php echo $site_name; ?>" class="elgg-heading-site text" href="<?php echo $site_url; ?>">
		<?php echo $site_name; ?>
	</a>
	<?php } else { ?>
	<a title="<?php echo $site_name; ?>" class="elgg-heading-site text" href="<?php echo $site_url; ?>">
		<?php echo $site_name_short; ?>
	</a>
	<?php } ?>


<?php } else { ?>
	<a title="<?php echo $site_name; ?>" class="elgg-header-logo" href="<?php echo $site_url; ?>">
	<?php if (elgg_get_plugin_setting('logo_url', 'metropolis-theme') == '') { ?>
	<img alt="<?php echo $site_name; ?>" src="<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/logo.png">
	<?php } else { ?>
	<img alt="<?php echo $site_name; ?>" src="<?php echo $logo_url; ?>">
	<?php } ?>
	</a>
<?php } ?>