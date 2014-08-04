<?php
/**
 * CSS Elgg theme specific
 *
 * @package metropolis_theme
 * @subpackage UI
 */
?>
/* <style> /**/
/* Font-Sizes */
.elgg-menu-river {
	font-size: 93.8%;
	font-size: 0.938em;
}
.elgg-breadcrumbs {
	font-size: 100%;
	font-size: 1.0em;
}
.elgg-menu-site, .elgg-menu-dropaccount, .elgg-menu-account, #login-dropdown {
	font-size: 98.5%;
	font-size: 0.985em;
}
/* INDEX */

.elgg-index {
	display: block;
    margin: 0;
    padding: 0 0 20px;
}
.elgg-index > .inner .elgg-body {
    font-size: 26px;
    line-height: 32px;
    margin-left: 5%;
    margin-right: 5%;
}
.elgg-module-index {
	padding-top: 10px;
    margin-top: 60px;
} 
.elgg-index > .inner h3 {
    font-size: 42px;
    font-weight: 500;
    letter-spacing: -1px;
    line-height: 1;
    margin-bottom: 9px;

}   
.elgg-index > .inner h3,
.elgg-index > .inner .elgg-body {
	text-align: center;
}
.elgg-index > .inner .btn-large {
    border-radius:	2px;
    font-size: 20px;
    font-weight: normal;
    margin: 20px 0 0;
    padding: 14px 24px;
}
.fancyline {
    background-color: #EBEBEB; /* fallback color if gradients are not supported */
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.0));
    background-image: -moz-linear-gradient(to left, transparent, rgba(0, 0, 0, 0.2), transparent);
    background-image: -ms-linear-gradient(to left, transparent, rgba(0, 0, 0, 0.2), transparent);
    background-image: -o-linear-gradient(to left, transparent, rgba(0, 0, 0, 0.2), transparent);
    background-image: linear-gradient(to left, transparent, rgba(0, 0, 0, 0.2), transparent);
    border: 0 none;
    height: 1px;
    margin: 20px 0 40px;
}
.elgg-container {
    width: 100%;
    *zoom: 1;
}
.elgg-container .elgg-module-aside {
	float: left;
    height: 100%;
	width: 31.914893%;
    min-height: 120px;
    margin-right: 2.1276595%;
    margin-bottom: 20px;
    float:left; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;    
}
.elgg-container .elgg-module-aside:last-child {
    margin-right: 0 !important;
}
.homebox .elgg-head {
    color: #FFF;
    border-bottom: none;
    margin-bottom: 15px;
    padding-bottom: 0;
}
.homebox .elgg-head h3{
        color: white !important;
		font-size: 1.5em; line-height: 1.6em;
}
.homebox {
    color: #F5F5F5;
    border: 1px solid rgba(0, 0, 0, 0.05);
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) inset;
    margin-bottom: 20px;
    min-height: 20px;
    padding: 15px;
	font-weight:400;
	font-size: 1.2em;
    line-height: 1.3em;
}
.a, .c { clear: left; }
.homebox blockquote {
    border-color: rgba(0, 0, 0, 0.15);
}
.homeboxone {
    background-color: #BD1E4A;
}
.homeboxtwo {
    background-color: #008A00;
}
.homeboxthree {
    background-color: #442359;
	margin-right: 0 !important;
}
/* ***************************************
	MISC
*****************************************/
.elgg-input-dropdown {
	height: 30px;
    padding: 4px !important;
}
select option {
    padding: 4px !important;
}
strong, b {
    font-weight: 500;
}
#thewire-characters-remaining {
    color: #333333;
    float: right;
    font-weight: 400;
    text-align: right;
}
#dashboard-info {
	border: 1px solid #DCDCDC;
	margin: 0 10px 15px;
}

.topsearch {
	display: block;
	position: relative;float:right;
	margin: 1.8em 0 0 1.5em;
}
.elgg-search-top input[type="text"] {
transition: all 0.7s ease 0s;
-webkit-transition: all 0.7s ease 0s;
width: 320px;
}
.elgg-search-top input[type="text"]:focus {
    width: 380px;
}
input[type=text],
input[type=password] {
	box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
}
.elgg-module .elgg-list-river {
	border-top: none;
}
.elgg-module .elgg-list {
	margin-top: 0;
}
.tidypics-photo-item + .tidypics-photo-item {
	margin-left: 0;
}
.tidypics-photo-item {
	margin-right: 7px;
}
.clearfull {width:100%;clear:both;}
.full {width:100%;}
.clear {clear:both;}
.seo {font-size: 0.7em;color: #666;}
.seo a {color: #666;}

.elgg-menu-connect li a span, .elgg-menu-connect li.elgg-menu-item-skype {
-moz-opacity:0.5;
-khtml-opacity: 0.5;
opacity: 0.5;}
.elgg-menu-connect li a span:hover, .elgg-menu-connect li.elgg-menu-item-skype:hover {
-moz-opacity:1;
-khtml-opacity: 1;
opacity: 1;}
.elgg-menu-connect li.elgg-menu-item-follow {padding:0 10px 5px 0;}
.elgg-menu-connect li.elgg-menu-item-skype img {margin:0 0 0 24px !important;vertical-align: middle !important;}
.elgg-menu-connect li.elgg-menu-item-skype p {font-size: 100% !important;}

a.jump{
    background-attachment: scroll;
	background-color: #252A2D;
	background-image:url(<?php echo elgg_get_site_url(); ?>mod/metropolis-theme/graphics/arrow_up.png);
    background-repeat:no-repeat;
	background-position:center;
    cursor: pointer;
    display: block;
    height: 34px;
    outline-style: none;
    position: fixed;
    right: 5%;
    bottom: 12%;
    width: 48px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	opacity:0.4;
    z-index: 3;
}
a.jump:hover{
    opacity:0.7;
}
.stButton .stLarge {
    background-size:24px 24px;
background-repeat:no-repeat;
    height: 24px !important;
    width: 24px !important;
}
    	/* Slider */
/* Browser Resets
*********************************/
.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus  {outline: none;}
.slides,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none;}
.slidebox{
max-width: 990px;
margin: 0 auto; padding-top:20px;
}
.flexslider ul.elgg-menu-homeslide li a, .flexslider ul.elgg-menu-homeslide li a:hover {text-decoration:none;}
/* Browser Resets */
.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus  {outline: none;}
.slides,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none;}

/* FlexSlider Necessary Styles
*********************************/
.flexslider {width: 100%; margin: 0; padding: 0;}
.flexslider .slides > li {display: none; -webkit-backface-visibility: hidden;} /* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider .slides img {max-width: 100%;width: 100%; height:auto;display: block;vertical-align: middle; margin-left: auto; margin-right: auto;}
.flex-pauseplay span {text-transform: capitalize;}

/* Clearfix for the .slides element */
.slides:after {content: "\0020"; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;}
html[xmlns] .slides {display: block;}
* html .slides {height: 1%;}

/* No JavaScript Fallback */
/* If you are not using another script, such as Modernizr, make sure you
 * include js that eliminates this class on page load */
.no-js .slides > li:first-child {display: block;}


/* FlexSlider Default Theme
*********************************/
.flexslider {background: inherit; position: relative;zoom: 1;}
.flexslider .slides {zoom: 1;}
.flexslider .slides > li {position: relative;}
/* Suggested container for "Slide" animation setups. Can replace this with your own, if you wish */
.flex-viewport { max-height: 2000px; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; transition: all 1s ease; }
.loading .flex-viewport { max-height: 300px; }
.flexslider .slides { zoom: 1; }

/* Caption style */
/* IE rgba() hack */
.flex-caption { zoom: 1;
background-color:#222;}
.flex-caption {padding: 2%; margin: 0; position: absolute; background: rgba(0,0,0,.7); color: #F5F5F5;}
.flex-caption a {color: #FFF;font-weight:700;}
.flex-caption {
   font-weight:400;
    left: 3em;
    top: 3em;
    font-size: 1.2em;
    line-height: 1.3em;
    padding: 1em 25px;
    width: 21.4375em;
}
.flex-caption p strong {
color: #FFF;
font-size: 1.5em; line-height: 1.6em;
}
/* Direction Nav */
.flex-direction-nav { height: 0; }

/* Control Nav */
.flex-control-nav {width: 100%; position: absolute; bottom: -40px; text-align: center;}
.flex-control-nav li {margin: 0 6px; display: inline-block; zoom: 1; *display: inline;}
.flex-control-paging li a, .flex-control-nav li a {width: 12px; height: 12px; display: block; background: #666; background: rgba(0,0,0,0.5); cursor: pointer; text-indent: -9999px; -webkit-border-radius: 20px; -moz-border-radius: 20px; -o-border-radius: 20px; border-radius: 20px; -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); -moz-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); -o-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); box-shadow: inset 0 0 3px rgba(0,0,0,0.3); }
.flex-control-paging li a:hover, .flex-control-nav li a:hover { background: #333; background: rgba(0,0,0,0.7); }
.flex-control-paging li a.flex-active, .flex-control-nav li a.flex-active { background: #000; background: rgba(0,0,0,0.9); cursor: default; }

/* ***************************************
	RESPONSIVE
*****************************************/
html {
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}

.elgg-button-nav, .elgg-topbar-logo, .elgg-heading-site-topbar, .elgg-sidebar .elgg-search {
    display: none;
}
.elgg-button-nav {
    display: none;
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	font-family: "Segoe UI Light","Segoe WPC","Segoe UI", Helvetica, Arial, "Arial Unicode MS", Sans-Serif;
	color: #FFF;
	float: left;
	padding: 18px 15px;
}

.elgg-button-nav .icon-bar {
    background-color: #F5F5F5;
    border-radius: 1px 1px 1px 1px;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    display: block;
    height: 2px;
    width: 22px;
}
.elgg-button-nav .icon-bar + .icon-bar {
    margin-top: 3px;
}
.file-photo .elgg-photo {
	max-width: 100%;
	height: auto;
}
.tidypics-photo {
	max-width: 100%;
	height: auto;
}
/* Videos Responsive fix*/
.videolist-watch {
position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videolist-watch iframe {
position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
@media (max-width: 1030px) {
	.elgg-menu-topbar-default > li:first-child a {
		margin-left: 0;
	}
	.elgg-menu-dropaccount > li > a {
		padding-right: 0.5em;
	}
	.elgg-page-footer {
		padding: 0 20px;
	}
}
@media (max-width: 990px) {
    .elgg-page-body-slider {
    padding: 0 !important;
    }
    .slidebox{
    max-width: 100%;width: 100%; padding:0;
    }
	.elgg-index {
    padding: 0 20px;
    }
    .flex-caption {
    left: 1em;
    top: 1em;
    }
	
}
@media (max-width: 820px) {
	.elgg-page-default {
		min-width: 0;
	}
	.elgg-layout-one-sidebar .elgg-main {
		width: 100%;
	}
	.elgg-layout-two-sidebar .elgg-main {
		width: 100%;
	}
    .elgg-layout-one-sidebar {
        width: 100%;
        float: left;
    }
    .elgg-layout-two-sidebar {
        width: 100%;
        float: left;
    }
	.elgg-sidebar {
		border-left: none;
        border-bottom: 1px solid #DCDCDC;
        width: 100%;
        float: left;
		padding: 27px 0 20px 0;
        margin: 0 0 10px 0;
		
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
	.elgg-sidebar-alt {
        display: none;
    }
	.elgg-menu-footer {
        float: none;
        text-align: center;
    }
	.elgg-river-item input[type=text] {
		width: 100%;
	}
	.elgg-river-item input[type=submit] {
		margin: 5px 0 0 0;
	}
	/***** CUSTOM INDEX ******/
    .elgg-col-1of2 {
        width: 100%;
    }
    .prl {
        padding-right: 0;
    }
    /***** WIDGETS ******/
	.elgg-col-1of3,
    .elgg-col-2of3,	
    #elgg-widget-col-1,
    #elgg-widget-col-2,
    #elgg-widget-col-3 {
        width: 100%;
        min-height: 0 !important;
    }
    .elgg-module-widget {
        margin: 0 0 15px;
    }
	

}
@media (min-width: 769px) {
.elgg-nav-collapse {
		display: block;
	}    
	
}

@media (max-width: 768px) {
    .elgg-layout, .elgg-main, .elgg-sidebar, .elgg-sidebar-alt {
	min-height: 180px;
}
   .flexslider .slides img {
    max-width: 136.5%;
    width: 136.5%;
    }
   .flex-control-nav {width: 100%; position: relative; bottom: -20px; text-align: center;}
   .flex-caption {margin: 0; position: relative;}
   .flex-caption {
    left: 0;
    top: 0;
    padding: 1em;
    width: auto; height:auto;display: block;
    }
   .flex-caption, .homebox {
    font-weight:300;
    font-size: 14px; line-height: 18px;
    }
   .flex-caption p strong, .homebox .elgg-head h3 {
    line-height: 1.2em;
    }
    .elgg-index > .inner .elgg-body {
        font-size: 18px;
        line-height: 22px;
    }
    .elgg-index > .inner h3 {
        font-size: 35px;
        line-height: 1;
    }
    .embed-wrapper {
        width: auto;
        margin: 0;
    }
    .elgg-container .elgg-module-aside {
		width: 100% !important;
        *width: 92% !important;
        margin-right: 0;
    }

    .elgg-system-messages {
	right: 0;
}
    .elgg-button-nav, .elgg-topbar-logo, .elgg-heading-site-topbar, .elgg-sidebar .elgg-search {
        cursor: pointer;
        display: block;
    }
	.elgg-page-header {
        display: none;
    }
    .elgg-nav-collapse {
        clear: both;
		display: none;
        width: 100%;
    }
	#login-dropdown a {
		padding: 15px 18px;
	}
    .elgg-menu-site, .elgg-menu-account {
		float: none;
    }
	.elgg-menu-site > li > ul, .elgg-menu-account {
		position: static;
		display: block;
		left: 0;
		margin-left: 0;
		border: none;
		box-shadow: none;
		background: none;	
	}
	.elgg-more,
	.elgg-menu-site-more li,
	.elgg-menu-account li,
	.elgg-menu-site > li > ul {
		width: auto;
	}
	.elgg-menu-site ul li {
        float: none;
        margin: 0;
    }
	.elgg-menu-account li {
        clear: both;
        float: none;
        margin:0;
    }
	.elgg-more > a{
		border-bottom: 1px solid #4787B8;
	}
    .elgg-menu-site > li {
        border-top: 1px solid #4787B8;
    }
	.elgg-menu-account > li {
        border-top: 1px solid #1570A6;
    }
	.elgg-menu-site > li {
        clear: both;
        float: none;
        margin: 0;
    }
	.elgg-menu-site > li > a {
     border-right: none !important;
	}
	.elgg-menu-site > li:first-child, .elgg-menu-account > li:first-child {
        border-top: none;
    }
	.elgg-menu-site > li > a, .elgg-menu-account > li a {
		padding: 10px 18px;
	}
	.elgg-menu-site-more > li > a {
		color: #FFF;
		background: none;
		border:none;
		padding: 10px 18px 10px 30px;	
	}
	.elgg-menu-site-more > li:last-child > a,
	.elgg-menu-site-more > li:last-child > a:hover {
		border-radius: 0;
	}
	
}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : landscape){
 .elgg-layout, .elgg-main, .elgg-sidebar, .elgg-sidebar-alt {
	min-height: 180px;
}
    .embed-wrapper {
        width: auto;
        margin: 0;
    }
    
    .elgg-system-messages {
	right: 0;
}
    .elgg-button-nav, .elgg-topbar-logo, .elgg-heading-site-topbar, .elgg-sidebar .elgg-search {
        cursor: pointer;
        display: block;
    }
	.elgg-page-header {
        display: none;
    }
    .elgg-nav-collapse {
        clear: both;
		display: none;
        width: 100%;
    }
	#login-dropdown a {
		padding: 15px 18px;
	}
    .elgg-menu-site, .elgg-menu-account {
		float: none;
    }
	.elgg-menu-site > li > ul, .elgg-menu-account {
		position: static;
		display: block;
		left: 0;
		margin-left: 0;
		border: none;
		box-shadow: none;
		background: none;	
	}
	.elgg-more,
	.elgg-menu-site-more li,
	.elgg-menu-account li,
	.elgg-menu-site > li > ul {
		width: auto;
	}
	.elgg-menu-site ul li {
        float: none;
        margin: 0;
    }
	.elgg-menu-account li {
        clear: both;
        float: none;
        margin:0;
    }
	.elgg-menu-site > li {
        clear: both;
        float: none;
        margin: 0;
    }
	.elgg-menu-site > li > a {
     border-right: none !important;
	}
	.elgg-menu-site > li:first-child, .elgg-menu-account > li:first-child {
        border-top: none;
    }
	.elgg-menu-site > li > a, .elgg-menu-account > li a {
		padding: 10px 18px;
	}
	.elgg-menu-site-more > li > a {
		color: #FFF;
		background: none;
		border:none;
		padding: 10px 18px 10px 30px;	
	}
	.elgg-menu-site-more > li:last-child > a,
	.elgg-menu-site-more > li:last-child > a:hover {
		border-radius: 0;
	}
}

@media (max-width: 600px) {
    .elgg-layout, .elgg-main, .elgg-sidebar, .elgg-sidebar-alt {
	min-height: 180px;
}
    .copy, .terms {float:none;text-align:center;width:100%;position:relative;}
    .elgg-tabs li, .elgg-menu-filter > li {
	margin: 0 0 0 2px;
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
}	
    .groups-profile-fields {
        float: left;
        padding-left: 0;
    }
    #profile-owner-block {
    	border-right: none !important;
        width: auto;
    }
    #profile-details {
        display: block;
        float: left;
    }
	#groups-tools > li {
        width: 100%;
        margin-bottom: 20px;
    }
    #groups-tools > li:nth-child(odd) {
        margin-right: 0;
    }
    #groups-tools > li:last-child {
        margin-bottom: 0;
    }	
	.elgg-menu-entity, .elgg-menu-annotation {
		margin-left: 0;
	}
	.elgg-menu-entity > li, .elgg-menu-annotation > li {
		margin-left: 0;
		margin-right: 15px;
	}
	.elgg-subtext {
		float: left;
		margin-right: 15px;
	}
}
@media (max-width: 480px)  {
    .elgg-layout, .elgg-main, .elgg-sidebar, .elgg-sidebar-alt {
	min-height: 0;
}
    .elgg-index > .inner .elgg-body {
        font-size: 14px; line-height: 18px;
    }
    .elgg-index > .inner h3 {
        font-size: 25px;
        line-height: 1;
    }
    .navbar-inner {
        padding-left: 10px;
        padding-right: 10px;
    }
    .elgg-likes {
        width: auto;
    }
    #notificationstable td.namefield {
        width: 20%;
    } 
    .tinymce-toggle-editor, #login-dropdown a.register {
        display: none !important;
    }
    td.mceToolbar {
        display: none;
    }
    .file-photo .elgg-photo {
		max-width: 97%;
    }
	.elgg-subtext {
	padding-bottom:1em;
	}
}
@media (max-width: 320px)  {
.elgg-menu-title {
    float: left;
    margin-top: 0.500em;
}
.elgg-menu-entity, .elgg-item h3 {
    position:relative;
	display:block;
    float: left;
    margin-left: 0;
	width:100%;
}
.elgg-item h3 {
	margin-bottom: 0.313em;
}
}
