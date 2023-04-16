<?php
/**
 * Plugin Name: Laravel
 * Description: This plugin to create custom contact list-tables from database using WP_List_Table class.
 * Version:     2.1.3
 * Plugin URI: https://labarta.es/wp-basic-crud-plugin-wordpress/
 * Author:      Labarta
 * Author URI:  https://labarta.es/
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpbc
 * Domain Path: /languages
 */


defined('ABSPATH') or die('¡Sin trampas!');

require plugin_dir_path(__FILE__) . '/vendor/autoload.php';
require plugin_dir_path(__FILE__) . '/bootstrap/app.php';

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$kernel = $app->make(Kernel::class);
$response = $kernel->handle(
    $request = Request::capture()
);

require plugin_dir_path(__FILE__) . '/modules/newsletter/index.php';

function wpbc_admin_menu()
{
    add_menu_page(__('Features', 'wpbc'), __('Features', 'wpbc'), 'activate_plugins', 'newsletters', ['modules\newsletter\admin\NewslettersAdmin', 'index'], 'dashicons-admin-generic', 50);

    add_submenu_page('newsletters', __('Newsletters', 'wpbc'), __('Newsletters', 'wpbc'), 'activate_plugins', 'newsletters', ['modules\newsletter\admin\NewslettersAdmin', 'index']);
}

add_action('admin_menu', 'wpbc_admin_menu');