<?php

/**
 * Plugin Name: AIM - Features
 * Description: This plugin to create custom contact list-tables from database using WP_List_Table class.
 * Version: 1
 */

defined('ABSPATH') or die('¡Sin trampas!');

global $wpdb;
define("AIM_NEWSLETTER_TABLE", $wpdb->prefix . 'aim_newsletter');

require_once plugin_dir_path(__FILE__) . '/vendor/autoload.php';

register_activation_hook(__FILE__, ['aim_features\newsletter\NewsletterDB', 'install']);

add_action('admin_menu', function () {
    add_menu_page(__('AIM - Newsletters', 'wpbc'), __('AIM - Newsletters', 'wpbc'), 'activate_plugins', 'aim_newsletter', ['aim_features\newsletter\NewsletterController', 'index'], 'dashicons-admin-generic', 50);

    add_submenu_page('aim_newsletter', __('Newsletters', 'wpbc'), __('Newsletters', 'wpbc'), 'activate_plugins', 'aim_newsletter', ['aim_features\newsletter\NewsletterController', 'index']);
});

add_action('wp_ajax_aim_newsletter_handle_add_or_edit', ['aim_features\newsletter\NewsletterController', 'handle_add_or_edit']);
