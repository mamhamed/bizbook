<?php
/**
 * Elgg theme meta
 * 
 */
if (elgg_get_plugin_setting('pubkey', 'metropolis-theme') != '') { 
$pubkey = elgg_get_plugin_setting('pubkey', 'metropolis-theme');
} else {
$pubkey = 'b5c868a5-dee6-4c77-8c3f-0fdb9978af37';
}
?>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "<?php echo $pubkey; ?>", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

