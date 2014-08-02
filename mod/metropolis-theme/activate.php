<?php
/**
 * Prompt the user to save settings after activating
    * Juipo Custom Elgg Theme
	 *
	 * @package Juipo Custom
	 * @author Damir Gasparlin - juipo Web Design
	 * @copyright Juipo.com 2014
	 * @link http://juipo.com/
 *
 */
    
	system_message(elgg_echo('metropolis_theme:activate'));
	forward("admin/settings/metropolis-theme");
