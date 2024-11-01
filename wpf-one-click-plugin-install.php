<?php
/*
Plugin Name: WPF One Click Plugin Install
Plugin URI: http://wordpress.org/plugins/wpf-one-click-plugin-install/
Description: A simple WordPress plugin to install & activate a plugin from plugin installation page with only one click.
Author: manikmist09
Author URI: http://manik.me/
Version: 1.1
Text Domain: 'wpfoneclickplugininstall'
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/



function wpf_register_scripts($hook) {
	if($hook !== 'plugin-install.php'){
		return;
	}
	wp_enqueue_script( 'wpf-one-click-plugin-installer', plugins_url('wpf-one-click-plugin-install.js', __FILE__), array('jquery'), '', false );
	wp_enqueue_script( 'jquery-watch', plugins_url('jquery-watch.min.js', __FILE__), array('jquery'), '', false );
}

add_action( 'admin_enqueue_scripts', 'wpf_register_scripts' );
