<?php
/**
 *
 * Juipo themesettings js
 *
 */

if (0) { ?><script><?php }

?>      
elgg.provide('juipo.options.panel');

juipo.options.panel.init = function() {
	var form = $('form[name=juipo-options-panel]');
	form.find('input[type=submit]').live('click', juipo.options.panel.submit);
};

juipo.options.panel.submit = function(e) {
	
	is_tinyMCE_active = false;
	
	if ((typeof tinyMCE != "undefined") && tinyMCE.activeEditor && !tinyMCE.activeEditor.isHidden()) {
		is_tinyMCE_active = true;
	}
	if (is_tinyMCE_active) {
		tinyMCE.triggerSave();
	}

	var form = $(this).parents('form');
	var id = form.find('textarea').attr('id');
	
	var data = form.serialize();
	
	$('.juipo-result').addClass('juipo-loader');

	elgg.action('metropolis-theme/admin/settings', {
		data: data,
		success: function(json) {
			$('.juipo-result').removeClass('juipo-loader');

			if (is_tinyMCE_active) {					
				tinymce.EditorManager.execCommand('mceRemoveControl',true, id);
				tinymce.EditorManager.execCommand('mceAddControl',true, id);
			}
		}
	});
	e.preventDefault();
};
elgg.register_hook_handler('init', 'system', juipo.options.panel.init);
