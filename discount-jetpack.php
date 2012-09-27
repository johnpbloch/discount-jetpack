<?php
/*
Plugin Name: Discount Jetpack
Plugin URI: https://github.com/johnpbloch/discount-jetpack
Version: 1.0
Description: Remove the 'new module' counter from the jetpack menu
Author: John P. Bloch
Author URI: http://www.johnpbloch.com
License: GPLv2
*/

if(is_admin()){
	add_action('admin_init', 'jpb_djp_admin_init');
}

function jpb_djp_admin_init(){
	if(!class_exists('Jetpack')){
		return;
	}
	wp_enqueue_script('jpb-discount-jetpack', plugins_url('discount.js', __FILE__), array('jquery'), '1.0', true);
}

