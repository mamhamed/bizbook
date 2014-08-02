<?php
/**
 * Juipo Topscroll plugin
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 *
 */

?>
<!-- Begin Juipo Topscroll plugin by Juipo Web Design - http://juipo.com/,  sponsored by http://www.mobilenetinc.com/ and http://www.cheap-bmw-parts.com/ -->
<a href="javascript:void(0);" class="jump" style="display:none;" title="<?php echo elgg_echo("juipo:topscroll"); ?>"></a>
			<script type="text/javascript">			
$('.jump').click(function(){
	$('html, body').animate({scrollTop:0}, 'slow');
});
			</script>