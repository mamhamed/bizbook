<?php

/**
 * Juipo metropolis css
 */

?>
/* Navigation */

a {
	color: #8B011D;
}
a.jump{
	background-color: #8B011D;
}
.elgg-page-globalnav, 
.elgg-menu-account > li.elgg-state-selected > a,
.elgg-menu-account > li > a:hover {
	background-color: #8B011D;
}
.elgg-tabs li, .elgg-menu-filter > li {
	border: 1px solid #972D3D;
	background-color: #8B011D;
}
.elgg-tabs a:hover, .elgg-menu-filter > li > a:hover {
	background-color: #972D3D;
	color: #F9F9F9;
}
.elgg-menu-site > li > a {
	border-right:1px solid #972D3D;
}
.elgg-menu-site-more {
    border-top: 1px solid #972D3D;
}
/***** Account menu slideout has background of a site menu link hover ******/
.elgg-page-slidemenu,
.elgg-button-nav:hover,
.elgg-menu-site > .elgg-state-selected > a,
.elgg-menu-site > li:hover > a,
.elgg-menu-site a.elgg-state-active,
.elgg-menu-dropaccount a.elgg-state-active,
.elgg-menu-dropaccount > li:hover > a,
.elgg-menu-account li a,
.elgg-button-dropdown:hover,
.elgg-button-dropdown.elgg-state-active {
	background-color: #972D3D;
	color: #FFF;
}
/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page a {
	color: #8B011D;
	border-left:3px solid #8B011D;
}

.elgg-menu-page a:hover, .elgg-menu-page li.elgg-state-selected > a {
	color: #999;
}
/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
	border-left:3px solid #8B011D;
	color: #8B011D;
}

.elgg-menu-owner-block li a:hover {
	color: #999;
}
/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	border: 1px solid #8B011D;
	background-color: #FFF;
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #8B011D;
}
* Popup */
.elgg-module-popup {
	background-color: #FFF;
	border: 1px solid #8B011D;	
}

/* Dropdown */
.elgg-module-dropdown {
	background-color: #FFF;
	border: 1px solid #8B011D;
}
/* Widgets */


.elgg-widgets-add-panel li, .elgg-widgets-add-panel .elgg-state-available {
    color: #FFF;
	background-color: #972D3D;
	border: 2px solid #E1E1EC;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #8B011D;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #F9F9F9;
	background-color: #8B011D;
}

.elgg-module-widget > .elgg-head h3 {
	color: #8B011D;
}
a.elgg-widget-collapse-button {
	color: #8B011D;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #8B011D;
}
/* **************************
	BUTTONS
************************** */
.elgg-button, button {
	color: #FFF;
	background-color: #8B011D;
}
.elgg-button:hover {
    color: #FFF;
	background-color: #972D3D;
}
/* Submit - Blue in default theme */
.elgg-button-submit {
	background-color: #760118;
}
.elgg-button-submit:hover {
	background-color: #8B011D;
}
.elgg-button-submit.elgg-state-disabled {
	background: #DEDEDE;
}
/* Action - Orange in default theme */
.elgg-button-action {
	background-color: #F06234;
}
.elgg-button-action:hover {
	background-color: #F1754B;
}
.elgg-button-cancel {
    background-color: #FAA51A;
}
.elgg-button-cancel:hover {
   background-color: #E38F07;
}
@media (max-width: 768px) {
   
	.elgg-more > a{
		border-bottom: 1px solid #972D3D;
	}
    .elgg-menu-site > li {
        border-top: 1px solid #972D3D;
    }
	.elgg-menu-account > li {
        border-top: 1px solid #8B011D;
    }
}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : landscape){
   
	.elgg-more > a{
		border-bottom: 1px solid #972D3D;
	}
    .elgg-menu-site > li {
        border-top: 1px solid #972D3D;
    }
	.elgg-menu-account > li {
        border-top: 1px solid #8B011D;
    }
}