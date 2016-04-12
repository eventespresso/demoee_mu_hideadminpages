
<?php if ( ! defined('ABSPATH')) exit('No direct script access allowed');
/*
  Plugin Name:          Kill admin pages, widgets etc. for subsites
  Plugin URI:           http://eventespresso.com/?demoee_kill_admin_pages
  Description:          Simply explicitly opts-out of any potential forced updates by WP
  Version:                    1.0
  Author:                     Event Espresso
  Author URI:           http://roughsmootheng.in
  License:                    MIT
  Copyright             (c) 2008-2014 Event Espresso  All Rights Reserved.
 *
 */
add_action( 'plugins_loaded', 'demoee_remove_stuff' );
function demoee_remove_stuff() {
	if ( is_main_site() || is_network_admin() ) {
		return;
	}
	//remove mandrill admin_init
	remove_action( 'admin_init', array( 'wpMandrill', 'adminInit' ) );
	remove_action( 'admin_menu', array( 'wpMandrill', 'adminMenu') );
}