<?php
/**
 * Juipo metropolis theme main settings
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 * 
 */

	$plugin = elgg_get_plugin_from_id('metropolis-theme');
	if (!isset($plugin->active_theme)) {
		$plugin->active_theme = 'default';
	}
	if (!isset($plugin->show_logo)) {
		$plugin->show_logo = 'yes';
	}
	if (!isset($plugin->topbarshow_logo)) {
		$plugin->show_logo = 'yes';
	}
	if (!isset($plugin->topbar)) {
		$plugin->topbar = 'no';
	}
	if (!isset($plugin->roundicons)) {
		$plugin->roundicons = 'yes';
	}
	if (!isset($plugin->sitemenu)) {
		$plugin->sitemenu = 'yes';
	}
	if (!isset($plugin->search)) {
		$plugin->search = 'yes';
	}
    if (!isset($plugin->sitemenumore)) {
		$plugin->sitemenumore = 'no';
	}
	if (!isset($plugin->show_thewire)) {
		$plugin->show_thewire = 'yes';
	}
	if (!isset($plugin->sharethis)) {
		$plugin->sharethis = 'yes';
	}
    if (!isset($plugin->topscroll)) {
		$plugin->topscroll = 'yes';
	}

echo "<div class=\"label\">" . elgg_echo('metropolis_theme:info:general') . "</div>";
// Theme colors
echo '<div class="item">';
echo elgg_echo('juipo:label:theme');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[active_theme]',
	'class' => 'theme ' .$plugin->active_theme. '',
	//'style' => 'border:5px solid '.$plugin->active_theme.';',
	'options_values' => array(
		'default' => elgg_echo('juipo:css:default'),
		'purple' => elgg_echo('juipo:css:purple'),
		'blue' => elgg_echo('juipo:css:blue'),
		'green' => elgg_echo('juipo:css:green'),
		'red' => elgg_echo('juipo:css:red'),
		'black' => elgg_echo('juipo:css:black'),
		'custom' => elgg_echo('juipo:css:custom'),
	),
	'value' => $plugin->active_theme,
));
echo '</div>';
echo '<br /clear=all>';

// Header Logo
echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:show_logo');
echo ' ';
echo elgg_view('input/radio', array(
	'name' => 'params[show_logo]',
	'options' => array(
		elgg_echo('metropolis_theme:label:logoimage') => 'yes',
        elgg_echo('metropolis_theme:label:logotext') => 'no',
	),
	'value' => $plugin->show_logo,
));
echo '</div>';

echo '<div id="logo_url">';
echo elgg_echo('metropolis_theme:label:logo_url');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[logo_url]",
	'value' => $plugin->logo_url,
));

echo "</div>";
echo '<br /clear=all>';
echo '<div id="site_name">';
echo elgg_echo('metropolis_theme:label:site_name');

echo elgg_view('input/text', array(
	'name' => "params[site_name]",
	'value' => $plugin->site_name,
));
echo "</div>";

echo '<br /clear=all>';

// Topbar Logo
echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:topbarshow_logo');
echo ' ';
echo elgg_view('input/radio', array(
	'name' => 'params[topbarshow_logo]',
	'options' => array(
		elgg_echo('metropolis_theme:label:logoimage') => 'yes',
        elgg_echo('metropolis_theme:label:logotext') => 'no',
	),
	'value' => $plugin->topbarshow_logo,
));
echo '</div>';

echo '<div id="topbarlogo_url">';
echo elgg_echo('metropolis_theme:label:topbarlogo_url');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[topbarlogo_url]",
	'value' => $plugin->topbarlogo_url,
));

echo "</div>";
echo '<br /clear=all>';
echo '<div id="topbarsite_name">';
echo elgg_echo('metropolis_theme:label:topbarsite_name');

echo elgg_view('input/text', array(
	'name' => "params[topbarsite_name]",
	'value' => $plugin->topbarsite_name,
));
echo "</div>";
echo '<br /clear=all>';

// Topbar Option
echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:roundicons');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[roundicons]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->roundicons,
));
echo '</div>';

// Topbar Option
echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:topbar');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[topbar]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->topbar,
));
echo '</div>';

// Search box Logged out
echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:search');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[search]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->search,
));
echo '</div>';

// Site menu Logged out
echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:sitemenu');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[sitemenu]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->sitemenu,
));
echo '</div>';
// Site menu more
echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:sitemenumore');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[sitemenumore]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->sitemenumore,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:thewire');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_thewire]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->show_thewire,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:sharethis');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[sharethis]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->sharethis,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:topscroll');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[topscroll]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $plugin->topscroll,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:customstyles');
echo ' ';
echo elgg_view('input/plaintext', array(
	'name' => 'params[customstyles]',
	'style' => 'min-height:200px;',
	'value' => $plugin->customstyles,
));
echo '</div>';

echo elgg_view('input/submit', array('value' => elgg_echo("save")));
echo "<div class=\"juipo-result\"></div>";
?>
<script type="text/javascript">
$(document).ready(function(){
if ($('input[name="params[show_logo]"]:checked').val() == 'yes'){
    $('#site_name').hide();
	$('#logo_url').show();
   
}
else {
       $('#site_name').show();
	$('#logo_url').hide();
}

$('input[name="params[show_logo]"]').change(function() {
  var selected = $(this).val();console.log(selected);
  if(selected == 'yes'){
   $('#site_name').hide();
	$('#logo_url').show();
  } else {
     $('#site_name').show();
	$('#logo_url').hide();
  }
});
if ($('input[name="params[topbarshow_logo]"]:checked').val() == 'yes'){
    $('#topbarsite_name').hide();
	$('#topbarlogo_url').show();
   
}
else {
       $('#topbarsite_name').show();
	$('#topbarlogo_url').hide();
}

$('input[name="params[topbarshow_logo]"]').change(function() {
  var selected = $(this).val();console.log(selected);
  if(selected == 'yes'){
   $('#topbarsite_name').hide();
	$('#topbarlogo_url').show();
  } else {
     $('#topbarsite_name').show();
	$('#topbarlogo_url').hide();
  }
});
});

</script>