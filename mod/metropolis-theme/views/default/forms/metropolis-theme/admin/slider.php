<?php
/**
 * Juipo Metropolis Theme Slider settings
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 * 
 */
    $site_url = elgg_get_site_url();
	$plugin = elgg_get_plugin_from_id('metropolis-theme');

	if (!isset($plugin->slider)) {
		$plugin->slider = 'yes';
	}
	if (!isset($plugin->slide1)) {
		$plugin->slide1 = $site_url.'/mod/metropolis-theme/graphics/slider/metroboxes.jpg';
	}
	if (!isset($plugin->slide2)) {
		$plugin->slide2 = $site_url.'/mod/metropolis-theme/graphics/slider/metrogreen.jpg';
	}
	if (!isset($plugin->slide3)) {
		$plugin->slide3 = $site_url.'/mod/metropolis-theme/graphics/slider/metroblue.jpg';
	}
	if (!isset($plugin->slide1text)) {
		$plugin->slide1text = '<p><strong>Slide1 Bold Text<br /></strong></p>
<p>To make large H3 heading like above in caption box, just make the text bold. Caption box bold text is made to look like H3 heading.</p>
<p>Join our network Today!</p>
<p><a href="/register">Click to Register</a></p>';
	}
	if (!isset($plugin->slide2text)) {
		$plugin->slide2text = '<p><strong>Slide2 Bold Text heading<br /></strong></p>
<p>In theme settings you can change background color of the this caption box. Elgg is just great!</p>
<p>Join our network Today!</p>
<p><a href="/register">Click to Register</a></p>';
	}
	if (!isset($plugin->slide3text)) {
		$plugin->slide3text = '<p><strong>Slide3 Bold Text heading<br /></strong></p>
<p>You can choose up to 5 image slides to display in slider or not display slider at all. Pretty cool Elgg stuff.</p>
<p>Join our network Today!</p>
<p><a href="/register">Click to Register</a></p>';
	}
    if (!isset($plugin->slide2color)) {
		$plugin->slide2color = '#DC3C00';
	}
	if (!isset($plugin->slide3color)) {
		$plugin->slide3color = '#442359';
	}


echo "<div class=\"label\">" . elgg_echo('metropolis_theme:info:slider') . "</div>";


if (elgg_is_active_plugin('custom_index')) {
echo "<div class=\"elgg-message elgg-state-error\">" . elgg_echo('metropolis_theme:error:index') . "</div>";
} else {

// begin #teasers section
echo '<div id="teasers">';
echo "<div class=\"label\">" . elgg_echo('metropolis_theme:info:setcontent') . "</div>";
echo "<div class=\"item\">" . elgg_echo('metropolis_theme:info:setcontentlanguage') . "</div>";

echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:teaser_title');
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[teaser_title]",
	'value' => $plugin->teaser_title,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:teaser_text');
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[teaser_text]",
	'value' => $plugin->teaser_text,
));
echo '</div>';
echo '<br /clear=all>';

// Teaser boxes
echo "<div class=\"label\">" . elgg_echo('metropolis_theme:info:teaserboxes') . "</div>";
echo '<div id="section">';
// Teaser 1
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:teaserbox_title').' 1';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[teaserbox1]",
	'value' => $plugin->teaserbox1,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:teaserbox_text').' 1';
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[teaserbox1_text]",
	'value' => $plugin->teaserbox1_text,
));
echo "</div>";
echo '<div class="itemline">';
echo '<div class="juipo-label-text">'.elgg_echo('metropolis_theme:label:teaserbox_color').' 1</div>';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[teaserbox1_color]",
	'class' => "jpicker",
	'value' => $plugin->teaserbox1_color,
));
echo "</div>";

echo "</div>";
echo '<div id="section">';


// Teaser 2
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:teaserbox_title').' 2';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[teaserbox2]",
	'value' => $plugin->teaserbox2,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:teaserbox_text').' 2';
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[teaserbox2_text]",
	'value' => $plugin->teaserbox2_text,
));
echo "</div>";
echo '<div class="itemline">';
echo '<div class="juipo-label-text">'.elgg_echo('metropolis_theme:label:teaserbox_color').' 2</div>';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[teaserbox2_color]",
	'class' => "jpicker",
	'value' => $plugin->teaserbox2_color,
));
echo "</div>";

echo "</div>";
echo '<div id="section">';

// Teaser 3
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:teaserbox_title').' 3';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[teaserbox3]",
	'value' => $plugin->teaserbox3,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:teaserbox_text').' 3';
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[teaserbox3_text]",
	'value' => $plugin->teaserbox3_text,
));
echo "</div>";
echo '<div class="itemline">';
echo '<div class="juipo-label-text">'.elgg_echo('metropolis_theme:label:teaserbox_color').' 3</div>';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[teaserbox3_color]",
	'class' => "jpicker",
	'value' => $plugin->teaserbox3_color,
));
echo "</div>";
echo "</div>";

echo "</div>";

// Slider
echo '<div class="item">';
echo elgg_echo('metropolis_theme:label:slider');
echo ' ';
echo elgg_view('input/radio', array(
	'name' => 'params[slider]',
	'options' => array(
		elgg_echo('option:yes') => 'yes',
        elgg_echo('option:no') => 'no',
	),
	'value' => $plugin->slider,
));
echo '</div>';
echo '<br /clear=all>';

// begin #slides section
echo '<div id="slides">';
echo "<div class=\"label\">" . elgg_echo('metropolis_theme:info:setslides') . "</div>";

echo '<div id="section">';
// Slide image 1
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slideimage').' 1';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide1]",
	'value' => $plugin->slide1,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slidetext').' 1';
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[slide1text]",
	'value' => $plugin->slide1text,
));
echo "</div>";
echo '<div class="itemline">';
echo '<div class="juipo-label-text">'.elgg_echo('metropolis_theme:label:slidecolor').' 1</div>';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide1color]",
	'class' => "jpicker",
	'value' => $plugin->slide1color,
));
echo "</div>";

echo "</div>";
echo '<div id="section">';


// Slide image 2
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slideimage').' 2';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide2]",
	'value' => $plugin->slide2,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slidetext').' 2';
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[slide2text]",
	'value' => $plugin->slide2text,
));
echo "</div>";
echo '<div class="itemline">';
echo '<div class="juipo-label-text">'.elgg_echo('metropolis_theme:label:slidecolor').' 2</div>';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide2color]",
	'class' => "jpicker",
	'value' => $plugin->slide2color,
));
echo "</div>";

echo "</div>";
echo '<div id="section">';

// Slide image 3
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slideimage').' 3';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide3]",
	'value' => $plugin->slide3,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slidetext').' 3';
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[slide3text]",
	'value' => $plugin->slide3text,
));
echo "</div>";
echo '<div class="itemline">';
echo '<div class="juipo-label-text">'.elgg_echo('metropolis_theme:label:slidecolor').' 3</div>';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide3color]",
	'class' => "jpicker",
	'value' => $plugin->slide3color,
));
echo "</div>";

echo "</div>";
echo '<div id="section">';


// Slide image 4
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slideimage').' 4';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide4]",
	'value' => $plugin->slide4,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slidetext').' 4';
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[slide4text]",
	'value' => $plugin->slide4text,
));
echo "</div>";
echo '<div class="itemline">';
echo '<div class="juipo-label-text">'.elgg_echo('metropolis_theme:label:slidecolor').' 4</div>';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide4color]",
	'class' => "jpicker",
	'value' => $plugin->slide4color,
));
echo "</div>";

echo "</div>";
echo '<div id="section">';

// Slide image 5
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slideimage').' 5';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide5]",
	'value' => $plugin->slide5,
));
echo "</div>";
echo '<div class="itemline">';
echo elgg_echo('metropolis_theme:label:slidetext').' 5';
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[slide5text]",
	'value' => $plugin->slide5text,
));
echo "</div>";
echo '<div class="itemline">';
echo '<div class="juipo-label-text">'.elgg_echo('metropolis_theme:label:slidecolor').' 5</div>';
echo ' ';
echo elgg_view('input/text', array(
	'name' => "params[slide5color]",
	'class' => "jpicker",
	'value' => $plugin->slide5color,
));
echo "</div>";
echo "</div>";
echo "</div>";

echo elgg_view('input/submit', array('value' => elgg_echo("save")));

}
echo "<div class=\"juipo-result\"></div>";
?>
<script type="text/javascript">
$(document).ready(function(){
if ($('input[name="params[slider]"]:checked').val() == 'yes'){
    $('#site_name').hide();
	$('#slides').show();
   
}
else {
       $('#site_name').show();
	$('#slides').hide();
}

$('input[name="params[slider]"]').change(function() {
  var selected = $(this).val();console.log(selected);
  if(selected == 'yes'){
   $('#site_name').hide();
	$('#slides').show();
  } else {
     $('#site_name').show();
	$('#slides').hide();
  }
});
});

</script>
