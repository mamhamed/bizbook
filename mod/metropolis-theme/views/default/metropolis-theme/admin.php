<?php

/**
 *  Admin CSS
 */

?>

/* ***************************************
	SETTINGS
*****************************************/
.juipo-options-panel {
	background-color: #333;
	border: 1px solid #444;
	margin-top: 15px;
	width: 100%;
}
.juipo-options-panel .elgg-button {
	font-size: 14px;
	font-weight: normal;
	text-decoration: none;
    float: left;
    
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	width: auto;
	padding: 6px 10px;
	cursor: pointer;
}
.juipo-options-panel .item {
	border-bottom: 1px solid #C0C0C0;
	padding: 10px 0;
}
.juipo-options-panel #section {
	border: 4px solid #444;
	padding: 10px;
	clear:both;
	margin:1em 0;
	min-height: 0;height:100%;display:block;overflow: auto; /*added overflow auto so last input stays inside*/
}
#section .itemline {
	clear:both;height:auto;
	margin:0.5em 0;
}
.juipo-holder {
	background-color: #EEEEEE;
	border: 2px solid #FFFFFF;
	margin: 20px;
	color: #222222;
	padding: 30px;
}
.panel-header {
	padding-bottom: 10px;
    margin-bottom: 4px;
    font-size: 18px;
}
.panel-line {
	height:1px;
    width: 100%;
	background:#CCC;
	border-bottom:1px solid #FFF;
	overflow:hidden;
}
.settings-optionspanel {
    min-height: 260px;height:auto;
    padding: 20px 0 0;
}
.settings-optionspanel .label {
	font-size: 1.2em;
    font-weight: bold;
}
.settings-optionspanel .elgg-input-dropdown.theme {
	float: right;
    margin-bottom: 8px;
    margin-left: 8px;
	height: 29px;
    padding: 3px !important;
	border-style:solid;
    border-width:3px;
	border-color:#444;
}
.settings-optionspanel .elgg-input-dropdown {
	float: right;
    margin-left: 8px;
	height: 26px;
    padding: 3px !important;
}
.settings-optionspanel select option {
    padding: 3px !important;
}
.settings-optionspanel .elgg-input-text {
	float: right;
    margin-bottom: 15px;
}
.settings-optionspanel .elgg-list li {
	padding: 10px 10px 8px;
    margin-bottom: 3px;
}
.settings-optionspanel .no {
	border: 1px solid #CCC;
	background: none;
}
.settings-optionspanel .sidebar,
.settings-optionspanel .sidebar_alt {
	border: 1px solid #B4C25C;
	background: #F5F7E9;
}
.settings-optionspanel .elgg-list li #title {
    vertical-align: top;
    display: inline-block;
}
.elgg-handle {
	cursor: move;
    display: inline-block;
    padding-right: 10px;
}
.elgg-handle-bar {
    display: block;
    width: 24px;
    height: 2px;
    background-color: #ECECEC;
    
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    border-radius: 1px;
    
    -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}
.elgg-handle .elgg-handle-bar + .elgg-handle-bar {
  margin-top: 3px;
}
.settings-optionspanel #target {
	padding: 10px;
    height: auto;
}
/* ***************************************
	TABS
*****************************************/
.juipo-holder .elgg-tabs {
    margin-top: 20px;
	border-bottom: 1px solid #ccc;
	display: table;
	width: 100%;
}
.juipo-holder .elgg-tabs li {
	float: left;
	border: 1px solid #CCCCCC;
	border-bottom-width: 0;
	margin: 0 2px 0 0;    
    background: #dedede;
    background-image: linear-gradient(to bottom, #FFFFFF, #dedede);
    
    -webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
}
.juipo-holder .elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 6px 20px 2px;
	text-align: center;
	height: 23px;
	color: #777;
}
.juipo-holder .elgg-tabs a:hover {
	background: #EEEEEE;
	color: #333;
}
.juipo-holder .elgg-tabs .elgg-state-selected {
	border-color: #CCCCCC;
	background: #FFFFFF;
}
.juipo-holder .elgg-tabs .elgg-state-selected a {
	color: #333;
	position: relative;
	top: 2px;
    
	background: #EEEEEE;
    background-image: linear-gradient(to bottom, #FFFFFF, #EEEEEE);
}
.juipo-result {
    display: inline-block;
    float: left;
    margin-left: 20px;
}
.juipo-loader {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/ajax_loader_bw.gif) no-repeat center center;
	min-height: 31px;
	min-width: 31px;
}
/* ColorPicker*/
.minicolors, .juipo-label-text {
	position: relative;
	float:left;
	clear:both;
}
.minicolors-swatch {
	position: absolute;
	vertical-align: middle;
	background: url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/vendors/js/jquery.minicolors.png) -80px 0;
	border: solid 1px #ccc;
	cursor: text;
	padding: 0;
	margin: 0;
	display: inline-block;
}

.minicolors-swatch-color {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}

.minicolors input[type=hidden] + .minicolors-swatch {
	width: 28px;
	position: static;
	cursor: pointer;
}

/* Panel */
.minicolors-panel {
	position: absolute;
	width: 173px;
	height: 152px !important;
	background: white;
	border: solid 1px #CCC;
	box-shadow: 0 0 20px rgba(0, 0, 0, .2);
	z-index: 99999;
	-moz-box-sizing: content-box;
	-webkit-box-sizing: content-box;
	box-sizing: content-box;
	display: none;
}

.minicolors-panel.minicolors-visible {
	display: block;
}

/* Panel positioning */
.minicolors-position-top .minicolors-panel {
	top: -154px;
}

.minicolors-position-right .minicolors-panel {
	right: 0;
}

.minicolors-position-bottom .minicolors-panel {
	top: auto;
}

.minicolors-position-left .minicolors-panel {
	left: 0;
}

.minicolors-with-opacity .minicolors-panel {
	width: 194px;
}

.minicolors .minicolors-grid {
	position: absolute;
	top: 1px;
	left: 1px;
	width: 150px;
	height: 150px !important;
	background: url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/vendors/js/jquery.minicolors.png) -120px 0;
	cursor: crosshair;
}

.minicolors .minicolors-grid-inner {
	position: absolute;
	top: 0;
	left: 0;
	width: 150px;
	height: 150px !important;
	background: none;
}

.minicolors-slider-saturation .minicolors-grid {
	background-position: -420px 0;
}

.minicolors-slider-saturation .minicolors-grid-inner {
	background: url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/vendors/js/jquery.minicolors.png) -270px 0;
}

.minicolors-slider-brightness .minicolors-grid {
	background-position: -570px 0;
}

.minicolors-slider-brightness .minicolors-grid-inner {
	background: black;
}

.minicolors-slider-wheel .minicolors-grid {
	background-position: -720px 0;
}

.minicolors-slider,
.minicolors-opacity-slider {
	position: absolute;
	top: 1px;
	left: 152px;
	width: 20px;
	height: 150px !important;
	background: white url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/vendors/js/jquery.minicolors.png) 0 0;
	cursor: row-resize;
}

.minicolors-slider-saturation .minicolors-slider {
	background-position: -60px 0;
}

.minicolors-slider-brightness .minicolors-slider {
	background-position: -20px 0;
}

.minicolors-slider-wheel .minicolors-slider {
	background-position: -20px 0;
}

.minicolors-opacity-slider {
	left: 173px;
	background-position: -40px 0;
	display: none;
}

.minicolors-with-opacity .minicolors-opacity-slider {
	display: block;
}

/* Pickers */
.minicolors-grid .minicolors-picker {
	position: absolute;
	top: 70px;
	left: 70px;
	width: 12px;
	height: 12px;
	border: solid 1px black;
	border-radius: 10px;
	margin-top: -6px;
	margin-left: -6px;
	background: none;
}

.minicolors-grid .minicolors-picker > div {
	position: absolute;
	top: 0;
	left: 0;
	width: 8px;
	height: 8px;
	border-radius: 8px;
	border: solid 2px white;
	-moz-box-sizing: content-box;
	-webkit-box-sizing: content-box;
	box-sizing: content-box;
}

.minicolors-picker {
	position: absolute;
	top: 0;
	left: 0;
	width: 18px;
	height: 2px;
	background: white;
	border: solid 1px black;
	margin-top: -2px;
	-moz-box-sizing: content-box;
	-webkit-box-sizing: content-box;
	box-sizing: content-box;
}

/* Inline controls */
.minicolors-inline {
	display: inline-block;
}

.minicolors-inline .minicolors-input {
	display: none !important;
}

.minicolors-inline .minicolors-panel {
	position: relative;
	top: auto;
	left: auto;
	box-shadow: none;
	z-index: auto;
	display: inline-block;
}

/* Default theme */
.minicolors-theme-default .minicolors-swatch {
	top: 5px;
	left: 5px;
	width: 18px;
	height: 18px;	
}
.minicolors-theme-default.minicolors-position-right .minicolors-swatch {
	left: auto;
	right: 5px;
}
.minicolors-theme-default.minicolors {
	width: auto;
	display: inline-block;
}
.minicolors-theme-default .minicolors-input {
	height: 20px;
	width: auto;
	display: inline-block;
	padding-left: 26px;
}
.minicolors-theme-default.minicolors-position-right .minicolors-input {
	padding-right: 26px;
	padding-left: inherit;
}

/* Bootstrap theme */
.minicolors-theme-bootstrap .minicolors-swatch {
	top: 3px;
	left: 3px;
	width: 28px;
	height: 28px;
	border-radius: 3px;
}
.minicolors-theme-bootstrap.minicolors-position-right .minicolors-swatch {
	left: auto;
	right: 3px;
}
.minicolors-theme-bootstrap .minicolors-input {
	padding-left: 44px;
}
.minicolors-theme-bootstrap.minicolors-position-right .minicolors-input {
	padding-right: 44px;
	padding-left: 12px;
}