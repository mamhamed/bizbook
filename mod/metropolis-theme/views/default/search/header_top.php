<?php
/**
 * Search box in page header
 */

echo '<div class="topsearch">';
echo elgg_view('search/search_box', array('class' => 'elgg-search-top elgg-search-header'));
echo '</div>';