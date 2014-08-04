<?php
/**
 * Juipo Simple tabs
 */
$tab = get_input('tab', 'settings');
$site_url = elgg_get_site_url();		
echo '
<!-- jQuery -->
	<script type="text/javascript" src="'.$site_url.'mod/metropolis-theme/vendors/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="'.$site_url.'mod/metropolis-theme/vendors/js/jquery.minicolors.min.js"></script>
<script type="text/javascript">
		$(document).ready( function() {
            $(".jpicker").minicolors();
		});
	</script>';
echo "<div class=\"juipo-options-panel\">";
	echo "<div class=\"juipo-holder\">";
		echo "<div class=\"panel-header\">" . elgg_echo('juipo:panel') . "</div>";
		echo "<div class=\"panel-line\"></div>";

		echo elgg_view('navigation/tabs', array(
			'tabs' => array(
				array(
					'text' => elgg_echo('metropolis_theme:tab:general'),
					'href' => '/admin/settings/metropolis-theme?tab=settings',
					'selected' => ($tab == 'settings'),
				),
				array(
					'text' => elgg_echo('metropolis_theme:tab:slider'),
					'href' => '/admin/settings/metropolis-theme?tab=slider',
					'selected' => ($tab == 'slider'),
				),
				array(
					'text' => elgg_echo('metropolis_theme:tab:sidebar'),
					'href' => '/admin/settings/metropolis-theme?tab=sidebar',
					'selected' => ($tab == 'sidebar'),
				),
				array(
					'text' => elgg_echo('metropolis_theme:tab:social'),
					'href' => '/admin/settings/metropolis-theme?tab=social',
					'selected' => ($tab == 'social'),
				)
			)
		));
		
		switch ($tab) {
			case 'slider':
				echo elgg_view_form('metropolis-theme/admin/slider', array('class' => 'settings-optionspanel', 'name' => 'juipo-options-panel'));
				break;
			case 'sidebar':
				echo elgg_view_form('metropolis-theme/admin/sidebar', array('class' => 'settings-optionspanel', 'name' => 'juipo-options-panel'));
				break;
			case 'social':
				echo elgg_view_form('metropolis-theme/admin/social', array('class' => 'settings-optionspanel', 'name' => 'juipo-options-panel'));
				break;
			default:
			case 'settings':
				echo elgg_view_form('metropolis-theme/admin/settings', array('class' => 'settings-optionspanel', 'name' => 'juipo-options-panel'));
				break;
		}

	echo "</div>";
echo "</div>";


