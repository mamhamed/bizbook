<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
$year = date('Y');
$plugin = elgg_get_plugin_from_id('metropolis-theme');


echo '<div class="float copy">';
if ($plugin->displaysocial == 'yes') {
echo elgg_view_menu('connect', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz mbm'));
echo '';
}
echo '</div>';

echo '<div class="float-alt terms">';
echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz mbs'));
echo '</div>';
echo '<div class="float clear copy">';

echo 'Copyright &copy;';
echo '&nbsp;' . $year . '&nbsp;&nbsp;';
echo elgg_view('output/url', array(
	'href' => $site_url,
	'text' => $site_name,
	'class' => 'copy',
	'is_trusted' => true,
));

if (elgg_is_admin_logged_in()) {
echo '&nbsp;|&nbsp;';
echo elgg_view('output/url', array(
			'href' => 'admin/settings/metropolis-theme',
			'text' => elgg_echo('admin'),
			'class' => 'copy',
	        'is_trusted' => true,
		));
	}



echo '</div>';
echo '<div class="float-alt terms">';
echo '<div class="mts seo">';
echo 'Design by ';
echo elgg_view('output/url', array(
	'href' => 'http://juipo.com/',
	'text' => "Juipo.com",
	'class' => '',
	'is_trusted' => true,
));
echo '</div>';
echo '</div>';
?>
<a href="javascript:void(0);" class="jump" style="display:none;" title="Go back to top"></a>
			<script type="text/javascript">			

$('.jump').click(function(){
	$('html, body').animate({scrollTop:0}, 'slow');
});

			</script>