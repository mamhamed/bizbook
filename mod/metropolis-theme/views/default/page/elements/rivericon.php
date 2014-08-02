<?php
/**
 * User Icon module
 * Juipo Metropolis Theme
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 */

$user = elgg_get_logged_in_user_entity();

$icon = elgg_view_entity_icon($user, 'large', array('use_hover' => false));

echo <<<HTML

<div class="elgg-module elgg-module-aside elgg-module-avatar">
	<div class="elgg-body">
		$icon
	</div>
</div>

HTML;


