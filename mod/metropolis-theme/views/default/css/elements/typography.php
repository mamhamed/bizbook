<?php
/**
 * CSS typography
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* ***************************************
	Typography
*************************************** */
body {
	color: #222;
	font-size: 93.8%;
	font-size: 0.938em;
	line-height: 1.4em;
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
}
a {
	color: #1570A6;
}

a:hover,
a.selected { <?php //@todo remove .selected ?>
	color: #555;
	text-decoration: none;
}

p {
	margin-bottom: 15px;
}

p:last-child {
	margin-bottom: 0;
}

pre, code {
	font-family: Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
	
	background:#EBF5FF;
	color: #000;
	overflow:auto;

	overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

	white-space: pre-wrap;
	word-wrap: break-word; /* IE 5.5-7 */
	
}

pre {
	padding:3px 15px;
	margin:0px 0 15px 0;
	line-height:1.3em;
}

code {
	padding:2px 3px;
}

.elgg-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

blockquote {
	line-height: 1.3em;
	padding: 10px 15px;
	margin: 0 0 15px 0;
	background: #E2F2FE;
	border: 1px solid #A1CBEA;
	border-radius: 3px;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: 500;
	color: #1A1A1A;
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	text-rendering: optimizelegibility;
}

h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; line-height: 1.1em; }
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

/* LOGO*/
a.elgg-topbar-logo { float:left;
    font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	margin: 3px 15px 2px 0;
	font-size:1.5em;font-weight:500;padding: 0;
	color: #FFF;vertical-align:middle;
}
.elgg-heading-site-topbar, .elgg-heading-site-topbar:hover {
    float:left;display:block;
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	font-size: 1.8em;
	line-height: 1.8em;
	margin: 0 15px 0 0;
	color: #FFF;
	text-shadow: 1px 1px 3px #333;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
	text-shadow: none;
	text-decoration: none;
}
.elgg-heading-site, .elgg-heading-site:hover {
    float:left;display:block;
	font-family: "wf_SegoeUILight","wf_SegoeUI","Segoe UI Light","Segoe WP Light","Segoe UI","Segoe","Segoe WP","Tahoma","Verdana","Arial","sans-serif";
	font-size: 2.8em;
	line-height: 1.8em;
	margin: 0 15px 0 0;
	color: #1A1A1A;
	text-shadow: 1px 1px 3px #333;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
	text-shadow: none;
	text-decoration: none;
}
/* Push down headings without the class elgg-heading-main (e.g. logged out activity, friends, register) */
.elgg-main > h2 {
    padding-top: 16px;
}

.elgg-heading-main {
    display: inline-block;
	vertical-align: -70%;
	max-width: 530px;
	margin-right: 10px;
}
.elgg-heading-basic {
	color: #1A1A1A;
	font-size: 1.2em;
	font-weight: 500;
}

.elgg-subtext {
	color: #666;
	font-size: 85%;
	line-height: 1.4em;
	font-style: italic;
}

.elgg-text-help {
	display: block;
	font-size: 85%;
	font-style: italic;
}

.elgg-quiet {
	color: #666;
}

.elgg-loud {
	color: #0054A7;
}

/* ***************************************
	USER INPUT DISPLAY RESET
*************************************** */
.elgg-output {
	margin-top: 10px;
}

.elgg-output dt { font-weight: 500 }
.elgg-output dd { margin: 0 0 1em 1em }

.elgg-output ul, .elgg-output ol {
	margin: 0 1.5em 1.5em 0;
	padding-left: 1.5em;
}
.elgg-output ul {
	list-style-type: disc;
}
.elgg-output ol {
	list-style-type: decimal;
}
.elgg-output table {
	border: 1px solid #DCDCDC;
}
.elgg-output table td {
	border: 1px solid #DCDCDC;
	padding: 3px 5px;
}
.elgg-output img {
	max-width: 100%;
	height: auto;
}
