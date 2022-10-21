<?php

/*
 * Plugin Name: Best Timline 
 * Description: Best Timline .
 * Author: 
 * Author URI: 
 * Version: 1.0
 *  Domain Path: /languages
 */

function cross_selling_plugin_scripts() {
	wp_enqueue_style( 'custom-style', plugin_dir_url( __FILE__ ) . 'assets/css/custom-style.css' );
}

add_action( 'wp_enqueue_scripts', 'cross_selling_plugin_scripts' );


// add_action( 'plugins_loaded', 'wws_aup_i18n_init' );

wp_register_script( 'bundle-custom-js', plugin_dir_url( __FILE__ ) . 'assets/js/bundle-custom.js', null, null, true );
wp_enqueue_script( 'bundle-custom-js' );

// require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
// require_once plugin_dir_path( __FILE__ ) . 'admin/cross-selling-tab.php';

require_once plugin_dir_path( __FILE__ ) . 'public/shortcode.php';

// require_once plugin_dir_path( __FILE__ ) . 'public/add_to_cart.php';
// require_once plugin_dir_path( __FILE__ ) . 'admin/variation-scross-selling-tab.php';
// require_once plugin_dir_path( __FILE__ ) . 'public/variation_shortcode.php';



