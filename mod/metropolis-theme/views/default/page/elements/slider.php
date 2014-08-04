<?php
/**
 * Juipo Metropolis Theme slider
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 */


$slidemenu = elgg_view_menu('homeslide', array(
	'sort_by' => 'priority',
	'class' => 'slides',
));

elgg_register_js('jquery.flexslider-min.js', 'mod/metropolis-theme/vendors/js/jquery.flexslider-min.js');
if (!elgg_is_logged_in()) {
elgg_load_js('jquery.flexslider-min.js');
}

$minheight = 200;
$sliderheight = $minheight + 40;
$sliderheight .= 'px';

?>

<script type="text/javascript" charset="utf-8">

  $(window).load(function() {
    $('.flexslider').flexslider({
	    animation: 'slide',
	    directionNav: false,
		});
  });
</script>

<div class="slidebox">
<div class="flexslider">
     <?php echo $slidemenu; ?>
</div>
</div>
<div class="clearfix"></div>
