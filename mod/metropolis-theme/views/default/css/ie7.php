/* <style> /**/

/**
 * CSS for IE7
 */

/* trigger hasLayout in IE */
* {
	zoom: 1;
}

/* site menu drop-down z-index fix for IE7 */
.elgg-page-header {
    z-index: 1;
}

/* inline-block fixes */
.elgg-gallery > li,
.elgg-button,
.elgg-icon-white,
.elgg-icon-sync-white,
.elgg-icon-sync,
.elgg-icon,
.elgg-menu-connect li.elgg-menu-item-skype a,
.elgg-menu-hz > li,
.elgg-menu-hz > li:after,
.elgg-menu-hz > li > a,
.elgg-menu-hz > li > span,
.elgg-breadcrumbs > li,
.elgg-menu-footer > li > a,
.elgg-menu-footer li,
.elgg-menu-general > li > a,
.elgg-menu-general li {
	display: inline;
}
.elgg-menu-connect li.elgg-menu-item-skype a {vertical-align: -30px;}
/* IE7 does not support :after */
.elgg-breadcrumbs > li > a {
	display: inline;
	padding-right: 4px;
	margin-right: 4px;
	border-right: 1px solid #bababa;
}
.elgg-menu-footer li,
.elgg-menu-user li,
.elgg-menu-general li {
	padding-left: 4px;
	padding-right: 4px;
}

/* longtext menu would not display horizontally without this */
.elgg-menu-longtext {
	width: 100%;
}
.elgg-menu-longtext li {
	width: 100px;
	float: right;
}

.elgg-avatar {
	display: inline;
}

.elgg-body-walledgarden .elgg-col-1of2 {
	width: 255px;
}

.elgg-module-walledgarden > .elgg-head,
.elgg-module-walledgarden > .elgg-foot {
	width: 530px;
}

input, textarea {
	width: 98%;
}

.elgg-tag a {
	/* IE7 had a weird wrapping issue for tags */
	word-wrap: normal;
}
/* theme specific */
.elgg-page-globalnav {
    z-index: 1;
}
.elgg-container .elgg-module-aside {
	width: 24.8%;
    margin-left: 1.4376595%;
    margin-right: 1.4376595%;
}