<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/
html, body {
    background:#F0F0F0;
    background:#EEEEEE;
    height: 100%;
    margin: 0;
    min-height: 100%;
    padding: 0;
}
/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 800px;background: #FFFFFF;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: auto;
}
.elgg-page-default .elgg-page-slidemenu > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: auto;
}
.elgg-page-default .elgg-page-globalnav > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: auto;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	padding: 2em 0;

}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #424242;
/* IE10 Consumer Preview */ 
background-image: -ms-radial-gradient(center, ellipse farthest-corner, #4A4A4A 0%, #1F1F1F 100%);

/* Mozilla Firefox */ 
background-image: -moz-radial-gradient(center, ellipse farthest-corner, #4A4A4A 0%, #1F1F1F 100%);

/* Opera */ 
background-image: -o-radial-gradient(center, ellipse farthest-corner, #4A4A4A 0%, #1F1F1F 100%);

/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(radial, center center, 0, center center, 506, color-stop(0, #4A4A4A), color-stop(1, #1F1F1F));

/* Webkit (Chrome 11+) */ 
background-image: -webkit-radial-gradient(center, ellipse farthest-corner, #4A4A4A 0%, #1F1F1F 100%);

/* W3C Markup, IE10 Release Preview */ 
background-image: radial-gradient(ellipse farthest-corner at center, #4A4A4A 0%, #1F1F1F 100%);
	border-bottom: 1px solid #000000;
	padding: 0 20px;
	position: relative;
	height: 32px;
	z-index: 9000;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 45px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
    height: auto;
    margin: 0 auto;
	padding: 0 20px;
	position: relative;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/***** PAGE SLIDEMENU - Account menu ******/
.elgg-page-slidemenu {
    height: auto;
    margin: 0 auto;
	padding: 0 20px;
	position: relative;
}
.elgg-page-slidemenu > .elgg-inner {
	position: relative;
}
/***** PAGE NAVBAR ******/
.elgg-page-globalnav {
	padding: 0 20px;
	position: relative;
	background: #4787B8;
	background: #1570A6;
}
.elgg-page-globalnav > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body, .elgg-page-body-slider {
	padding: 0 20px;
	background: #FFFFFF;
}

.elgg-layout, .elgg-main {
	min-height: 560px;
}
.elgg-layout-widgets > .elgg-widgets, .elgg-widgets {
	float: right;
}
.elgg-layout-error {
	padding-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 32px 0 20px 30px;
	float: right;
	width: 21.212121%;
	margin: 0;
	border-left: 1px solid #EBEBEB;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 32px 30px 20px 0;
	float: left;
	width: 16.161616%;
	margin: 0 30px 0 0;
	border-right: 1px solid #EBEBEB;
}
.elgg-main {
	position: relative;
	padding: 12px 0 10px 0;
}
.elgg-main > .elgg-head {
	padding-bottom: 5px;
	border-bottom: 1px solid #EBEBEB;
	margin-bottom: 10px;
}
.elgg-layout-one-sidebar .elgg-main {
	float: left;
    width: 72.525252%;
}
.elgg-layout-two-sidebar .elgg-main {
	float: left;
    width: 50.101010%;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	color: #333;
	padding: 0 10px;
	position: relative;
	border-top: 1px solid #DEDEDE;
	background:#EEEEEE;
}
.elgg-page-footer li h3 {
	color: #333;
}