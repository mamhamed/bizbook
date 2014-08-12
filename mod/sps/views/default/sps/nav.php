<?php
/**
 * Members navigation
 */

$tabs = array(
	'all' => array(
		'title' => "All",
		'url' => "sps/All",
		'selected' => $vars['selected'] == 'All',
	),
	'restaurant' => array(
		'title' => "Restaurants",
		'url' => "sps/Restaurant",
		'selected' => $vars['selected'] == 'Restaurant',
	),
	'hotel' => array(
		'title' => "Hotels",
		'url' => "sps/Hotel",
		'selected' => $vars['selected'] == 'Hotel',
	),
	'lawyer' => array(
		'title' => "Lawyers",
		'url' => "sps/Lawyer",
		'selected' => $vars['selected'] == 'Lawyer',
	),
	'dentist' => array(
		'title' => "Dentist",
		'url' => "sps/Dentist",
		'selected' => $vars['selected'] == 'Dentist',
	),
	'trainer' => array(
		'title' => "Trainers",
		'url' => "sps/Trainer",
		'selected' => $vars['selected'] == 'Trainer',
	),
	'stylist' => array(
		'title' => "Stylists",
		'url' => "sps/Stylist",
		'selected' => $vars['selected'] == 'Stylist',
	),
);

echo elgg_view('navigation/tabs', array('tabs' => $tabs));
