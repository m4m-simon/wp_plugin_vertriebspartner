<?php
/*
Plugin Name: Grundhaus Vertriebspartner
Version: 1.0.0
Author: menzel@m4m
Author URI: https://www.media4motion.com
 */
// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

register_activation_hook(__FILE__, array('GHVertriebspartner', 'activation'));
register_deactivation_hook(__FILE__, array('GHVertriebspartner', 'deactivation'));
register_uninstall_hook(__FILE__, array('GHVertriebspartner', 'uninstall'));

define('GH_VERTRIEBSPARTNER', '1.0.0');
define('GH_VERTRIEBSPARTNER__MINIMUM_WP_VERSION', '4.9.8');
define('GH_VERTRIEBSPARTNER__PLUGIN_DIR', plugin_dir_path(__FILE__));
// define('GH_VERTRIEBSPARTNER_DELETE_LIMIT', 100000);

require_once(GH_VERTRIEBSPARTNER__PLUGIN_DIR . 'class.gh-vertriebspartner.php');

add_action('init', array('GHVertriebspartner', 'init'));