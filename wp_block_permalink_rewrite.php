<?php
/*
Plugin Name: Block Permalink Rewriting
Description: This plugin block WordPress from automatically regenerate rewrite files
Version: 1.0.0
Plugin URI: 
License: GPLv2+
Author: Tan Fang Wai
Author URI: https://plus.google.com/104116528882352191472
*/
class WP_Block_Permlink_Rewrite{

	// Constructor
    function __construct() {

		/* Prevent WordPress from rewriting permalink rules */
        add_filter('flush_rewrite_rules_hard','__return_false');
        register_activation_hook( __FILE__, array( $this, 'wp_permlink_install' ) );
        register_deactivation_hook( __FILE__, array( $this, 'wp_permlink_uninstall' ) );
    }
    /*
     * Plugin : Install 
     */
    function wp_permlink_install() {



    }

    /*
     * Plugin : Uninstall
     */
    function wp_permlink_uninstall() {



    }

}

new WP_Block_Permlink_Rewrite();