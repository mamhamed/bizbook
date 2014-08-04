<?php
/**
 * Wire add form body
 *
 * @uses $vars['post']
   * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */

elgg_load_js('elgg.thewire');

$post = elgg_extract('post', $vars);

$text = elgg_echo('post');
if ($post) {
	$text = elgg_echo('thewire:reply');
}

if ($post) {
	echo elgg_view('input/hidden', array(
		'name' => 'parent_guid',
		'value' => $post->guid,
	));
}

echo elgg_view('input/plaintext', array(
	'name' => 'body',
	'class' => 'mtm',
	'id' => 'thewire-textarea',
	'value' => elgg_echo('metropolis_theme:thewire'),
));

?>
<div class="river-wire-foot">
<div id="thewire-characters-remaining">
	<span>140</span> <?php echo elgg_echo('thewire:charleft'); ?>
</div>

<div class="elgg-foot mts">
<?php

echo elgg_view('input/submit', array(
	'value' => $text,
	'id' => 'thewire-submit-button',
));
?>
</div>
</div>

<script>
var defValue = "<?php echo elgg_echo('metropolis_theme:thewire'); ?>";

$('.river-wire-foot').hide();

$('#thewire-textarea').focus(function() {
   $('.river-wire-foot').show('slow');
   if (this.value==defValue) { this.value='' };
}).blur(function() {
    //$('#thewire-characters-remaining, .elgg-foot').hide('slow');
	if (this.value=='') { this.value=defValue };
	$('.river-wire-foot').hide('slow');
});
</script>