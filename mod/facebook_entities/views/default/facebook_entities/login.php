<?php

$url =  elgg_get_site_url().'facebook_entities/login';
$img_url = elgg_get_site_url() . 'mod/facebook_entities/graphics/facebook_login.png';

$login = <<<__HTML
<div id="login_with_facebook">
	<a href="$url"><img src="$img_url" alt="Facebook" /></a>
</div>
__HTML;

echo $login;