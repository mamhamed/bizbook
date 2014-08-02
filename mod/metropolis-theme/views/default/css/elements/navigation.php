<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 20px 0 10px;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	text-align: center;
}
.elgg-pagination li:first-child a,
.elgg-pagination li:first-child section {
	border-radius: 0;
    border-left-width: 1px;
}
.elgg-pagination li:last-child a,
.elgg-pagination li:last-child section {
    border-radius: 0;
}
.elgg-pagination a, 
.elgg-pagination section {
	display: inline-block;	
	padding: 6px 15px;
	color: #444;		
    border-color: #DCDCDC;
    border-style: solid;
    border-width: 1px 1px 1px 0;
}
.elgg-pagination a:hover {
	color: #999;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled section {
	color: #CCC;
}
.elgg-pagination .elgg-state-selected section {
	color: #999;
}
/* ***************************************
	FILTER MENU
*************************************** */

.elgg-menu-filter {
	margin-bottom: 10px;
	clear:both;
	border-bottom: none;
	display: table;
	width: 100%;
}
.elgg-menu-filter > li {
	float: left;
	/*border-bottom: 0;*/
	margin: 0 0 0 5px;
	border-radius: 0;
}
.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 10px 15px;
	text-align: center;
	height: auto;
	color: #fff;
}

/* ***************************************
	TABS
*************************************** */

.elgg-tabs {
	margin-bottom: 10px;
	clear:both;
	border-bottom: none;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	/*border-bottom: 0;*/
	margin: 0 0 0 5px;
	border-radius: 0;
}
.elgg-tabs a, .elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 10px 15px;
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/tab-white.png) no-repeat center right;
    padding: 10px 25px 10px 12px !important;
	text-align: center;
	height: auto;
	color: #fff;
}
.elgg-tabs a:hover, .elgg-menu-filter > li > a:hover {
	background-image:url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/tab-white.png);
    background-repeat:no-repeat;
	background-position:right center;
    padding: 10px 25px 10px 12px !important;
	color: #F9F9F9;
	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
}
.elgg-tabs .elgg-state-selected {
	background: #FFF;
}
.elgg-tabs .elgg-state-selected a, .elgg-menu-filter > .elgg-state-selected > a, .elgg-menu-filter > .elgg-state-selected > a:hover {
	position: relative;
	top: 0;
	background-color: #FFF;
	background: #fff url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/tab-black.png) no-repeat center right;
   padding: 10px 25px 10px 12px !important;
	color: #444;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 100%;
	font-size: 1.0em;
	font-weight: normal;
	line-height: 1.4em;
    padding: 0 10px 1px 0;
	color: #BABABA;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after {
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #999;
}
.elgg-breadcrumbs > li > a:hover {
	text-decoration: underline;
}
.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: -1px;
	left: 0;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-page-globalnav .elgg-menu-topbar-default {
   display:none;
}
.elgg-menu-topbar {
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	float: left;
}
.elgg-menu-topbar > li {
	float: left;
}

.elgg-menu-topbar > li > a {
	padding-top: 5px;
	color: #EEE;
	margin: 1px 15px 0;
}

.elgg-menu-topbar > li > a:hover {
	text-decoration: none;
}

.elgg-menu-topbar-alt {
	float: right;
}

.elgg-menu-topbar .elgg-icon {
	vertical-align: middle;
	margin-top: -1px;
}
.elgg-menu-topbar .elgg-icon-white {
	vertical-align: middle;
	margin-top: -1px;
}
.elgg-menu-topbar > li > a.elgg-topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}

.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	width: 18px;
	height: 18px;
	padding-top: 7px;
}

/* ***************************************
	New Account MENU
*************************************** */

.elgg-menu-dropaccount {
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	float: right;
}

.elgg-menu-dropaccount > li {
	float: left;
}

.elgg-menu-dropaccount > li > a {
	color: #FFF;
	padding: 15px 18px;
	margin: 1px 0 0 0;
    text-decoration: none;
}

.elgg-menu-dropaccount > .elgg-state-selected > a,
.elgg-menu-dropaccount > li:hover > a {
	color: #FFF;
	text-decoration: none;
}

/* Account Dropdown menu, Rest is shared below in site menu */
.elgg-menu-account {
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	float: left;
	display: none;
    text-align: left;
    margin: 0;
	padding: 10px 0;
	position: relative;
    top: 0;
    z-index: 1;
}

/* ***************************************
	SITE MENU
*************************************** */
/* All 3 menus hover */
.elgg-menu-site > li > a:hover, .elgg-menu-dropaccount > li > a:hover, .elgg-menu-account > li > a:hover {
	text-decoration: none;
	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
}

.elgg-menu-site {
	font-family: "Segoe UI Light","Segoe WPC","Segoe UI", Helvetica, Arial, "Arial Unicode MS", Sans-Serif;
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	float: left;
	left: 0;
	top: 0;
	position: relative;
	z-index: 1;
}
.elgg-menu-site > li {
	float: left;
}
.elgg-menu-site > li > a {
	border-right:1px solid #4787B8;
}
.elgg-menu-site > li:last-child > a,
.elgg-menu-site > li:last-child > a:hover {
	border-right:none;
}
.elgg-menu-site > li > a {
	color: #FFF;
	padding: 15px 18px;
	margin: 1px 0 0 0;
}
.elgg-button-nav:hover,
.elgg-menu-site > .elgg-state-selected > a,
.elgg-menu-site > li:hover > a,
.elgg-menu-site a.elgg-state-active {
	background-color: #4787B8;
	color: #FFF;
	text-decoration: none;
	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
}
.elgg-more a.elgg-state-selected,
.elgg-more a:hover,
.elgg-more a.elgg-state-active {
	color: #FFF;
}

.elgg-menu-site-more {
	font-family: "Segoe UI Light","Segoe WPC","Segoe UI", Helvetica, Arial, "Arial Unicode MS", Sans-Serif;
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	float: left;
	display: none;
    border-top: 1px solid #4787B8;
    /*border-top: 1px solid #A08CB0;*/
    text-align: left;
    margin-left: 0;
	padding: 10px 1%;
    width: 98%;
	position: relative;
    top: 0;
    z-index: 1;
}
.elgg-menu-site-more li {
	min-width: 120px;
}
.elgg-menu-account li {
	min-width: 180px;
}
.elgg-menu-account li > a {
		padding: 10px 20px;
		margin: 0 5px 5px 0;
}
/* Shared effects on both dropdown menus */
.elgg-menu-site-more li, .elgg-menu-account li {
	float: left;
	border-radius: 0;
}
.elgg-menu-account li > a {
	color: #fff;border-right:none;
}
.elgg-menu-site-more > li:last-child > a,
.elgg-menu-site-more > li:last-child > a:hover,
.elgg-menu-account > li:last-child > a,
.elgg-menu-account > li:last-child > a:hover {
	border-radius: 0;border-right:none;
	margin right: 0;
}
.elgg-menu-site-more > li.elgg-state-selected > a,
.elgg-menu-site-more > li > a:hover,
.elgg-menu-account > li.elgg-state-selected > a,
.elgg-menu-account > li > a:hover {
	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
}

/* COLORS*/

.elgg-tabs li, .elgg-menu-filter > li {
	border: 1px solid #4787B8;
	background-color: #1570A6;
}
.elgg-tabs a:hover, .elgg-menu-filter > li > a:hover {
	background-color: #4787B8;
	color: #F9F9F9;
}
/***** PAGE SLIDEMENU - Account menu ******/
.elgg-page-slidemenu {
	background-color: #4787B8;
}
.elgg-menu-dropaccount a.elgg-state-active,
.elgg-menu-dropaccount > li:hover > a {
	background-color: #4787B8;
	color: #FFF;
}
.elgg-menu-account li a {
	background-color: #4787B8;

}
.elgg-menu-account > li.elgg-state-selected > a,
.elgg-menu-account > li > a:hover {
background-color: #1570A6;

}
.elgg-more > a:after {
	content: "";
	margin-left: 0;
}
/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
	margin-top: -1px;
}
.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	margin-bottom: 15px;
}
.elgg-menu-page a {
	color: #1570A6;
	display: block;
	margin: 0 0 3px;
	padding: 2px 4px 2px 5px;
	border-left:3px solid #1570A6;
}

.elgg-menu-page a:hover, .elgg-menu-page li.elgg-state-selected > a {
	color: #999;
	text-decoration: none;
	padding: 2px 4px 2px 10px;
	border-left:3px solid #1570A6;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;
	overflow: hidden;
	min-width: 180px;
	max-width: 250px;
	border: 1px solid #1570A6;
	background-color: #FFF;
	
	border-radius: 0 3px 3px 3px;
	box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.25);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #1570A6;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover > li a {
	padding: 6px 18px;
}
.elgg-menu-hover a:hover {
	background-color: #F0F0F0;	
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: #FF0000;
}
.elgg-menu-hover-admin a:hover {
	color: #FFF;
	background-color: #FF0000;
}

/* ***************************************
	SITE FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
}
.elgg-menu-footer > li {
	color: #666;
}
.elgg-page-footer a:hover {
	color: #666;
}
/* IE 8 fix */
.elgg-menu-footer > li:before {
	content: "\007C";
	padding: 0 6px;
}
.elgg-menu-footer > li:first-child:before {
	content: "";
	padding: 0;
}

.elgg-menu-footer-default {
	float: right;
}

.elgg-menu-footer-alt {
	float: left;
}

.elgg-menu-footer-meta {
	float: left;
}

/* ***************************************
	GENERAL MENU
*************************************** */
.elgg-menu-general > li,
.elgg-menu-general > li > a {
	display: inline-block;
	color: #999;
}

.elgg-menu-general > li:after {
	content: "\007C";
	padding: 0 6px;
}

/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity, .elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	color: #AAA;
	height: auto;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #AAA;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li, .elgg-menu-river > li {
    margin-right: 10px;
}
/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
	display: block;
	margin: 3px 0 5px 0;
	text-decoration: none;
	padding: 2px 4px 2px 5px;
	border-left:3px solid #1570A6;
	color: #1570A6;
}

.elgg-menu-owner-block li a:hover {
	color: #999;
	text-decoration: none;
	padding: 2px 4px 2px 10px;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 15px;
	font-size: 93.8%;
	font-size: 0.938em;
	color: #AAA;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #AAA;
	height: 16px;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}

/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 15px;
}
.elgg-menu-extras li {
	padding-right: 5px;
}

/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 8px;
	display: inline-block;
	width: 18px;
	height: 18px;
}
.elgg-menu-widget > .elgg-menu-item-collapse {
	left: 10px;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 10px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 32px;
}
.elgg-menu-hz > .elgg-menu-item-comment, .elgg-menu-hz > .elgg-menu-item-likes a, .elgg-menu-hz > .elgg-menu-item-delete a, a.elgg-widget-edit-button, .elgg-tags li span {
    padding-top: 6px;
}