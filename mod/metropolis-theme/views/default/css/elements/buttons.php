<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* **************************
	BUTTONS
************************** */
.elgg-button, button {
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	color: #FFF;
	background-color: #1570A6;
	border: none !important;
	width: auto;
	padding: 5px 12px;
	cursor: pointer;			
	border-radius:	2px;
	-webkit-box-shadow: inset 0 0 1px rgba(255, 255, 255, 0.6);
	-moz-box-shadow: inset 0 0 1px rgba(255, 255, 255, 0.6);
	box-shadow: inset 0 0 1px rgba(255, 255, 255, 0.6);
	
}
.elgg-button:hover {
    color: #FFF;
	background-color: #4787B8;
	border: none !important;
	text-decoration: none;
	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.4);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.4);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.4);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
}
a.elgg-button {
	padding: 6px 10px;
}
.elgg-button-submit {
	background-color: #125E8B;
	background-image:url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/submit-white.png);
    background-repeat:no-repeat;
	background-position:right center;
   padding: 5px 25px 5px 12px !important;
}
.elgg-button-submit:hover {
	background-color: #007BC6;
	padding: 5px 25px 5px 12px !important;
}
.elgg-button-submit.elgg-state-disabled {
	background: #DEDEDE;
	cursor: default;
}

.elgg-button-action {
	background-color: #F06234;
	background-image:url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/action-white.png);
    background-repeat:no-repeat;
	background-position:right center;
   padding: 5px 30px 5px 12px !important;
}
.elgg-button-action:hover {
	background-color: #F1754B;
   padding: 5px 30px 5px 12px !important;
}

.elgg-button-cancel {
    background-color: #FAA51A;
	background-image:url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/cancel-white.png);
    background-repeat:no-repeat;
	background-position:right center;
   padding: 5px 30px 5px 12px !important;
}
.elgg-button-cancel:hover {
   background-color: #E38F07;
   padding: 5px 30px 5px 12px !important;
}
.elgg-button-delete {
    background-color: red !important;
	background-image:url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/delete-white.png);
    background-repeat:no-repeat;
	background-position:right center;
    padding: 5px 30px 5px 12px !important;
}
.elgg-button-delete:hover {
   background-color: red !important;
   padding: 5px 30px 5px 12px !important;
	
}
.elgg-button-dropdown {
	background: none;
	text-decoration: none;
	display: block;
	position: relative;
	margin-left: 0;	
	color: #FFF;
	border: none;
	box-shadow: none;
	border-radius:	0;
}
.elgg-button-dropdown:hover, .elgg-button-dropdown.elgg-state-active {
	background-color: #4787B8;
	color: #FFF;
	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
	text-decoration: none;
}