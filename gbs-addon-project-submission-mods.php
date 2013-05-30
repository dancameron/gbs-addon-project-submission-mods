<?php
/*
Plugin Name: Project Submission Modifications
Version: 1
Plugin URI: http://groupbuyingsite.com/marketplace
Description: Project Submission mods and default rewards
Plugin URI: http://groupbuyingsite.com/marketplace/
Author: Sprout Venture
Author URI: http://sproutventure.com/
Plugin Author: Dan Cameron
Plugin Author URI: http://sproutventure.com/
Contributors: Dan Cameron
Text Domain: group-buying
*/

// Load after all other plugins since we need to be compatible with groupbuyingsite
add_action( 'plugins_loaded', 'gb_load_project_submission_mods' );
function gb_load_project_submission_mods() {
	$gbs_min_version = '4.3';
	if ( class_exists( 'Group_Buying_Controller' ) && version_compare( Group_Buying::GB_VERSION, $gbs_min_version, '>=' ) ) {
		require_once 'classes/GB_Project_Submission_Addon.php';

		// Hook this plugin into the GBS add-ons controller
		add_filter( 'gb_addons', array( 'GB_Project_Submission_Addon', 'gb_addon' ), 10, 1 );
	}
}