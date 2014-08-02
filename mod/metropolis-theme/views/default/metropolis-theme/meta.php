<?php
/**
 * Elgg theme meta
 * 
 */
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

<link rel="apple-touch-icon" href="<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/homescreen.png" />

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<!-- iPhone SPLASHSCREEN-->
<link href="<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/homesplash.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image"/>
<link href="<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/homesplash.png" media="(device-width: 320px) and (device-height: 480px)" rel="apple-touch-startup-image"/>
<?php 
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) 
{  // user is on an iPhone, iPad, or iPod device ?>
<script type="text/javascript">
	(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")
</script>
<?php
}
?>

