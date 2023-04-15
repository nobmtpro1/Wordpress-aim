<?php
require plugin_dir_path(__FILE__) . 'Table.php';
require plugin_dir_path(__FILE__) . 'metabox-p1.php';

function wpbc_admin_menu()
{
    add_menu_page(__('AIM', 'wpbc'), __('AIM', 'wpbc'), 'activate_plugins', 'contacts', 'wpbc_contacts_page_handler', 'dashicons-admin-generic', 50);
    add_submenu_page('contacts', __('Contacts', 'wpbc'), __('Contacts', 'wpbc'), 'activate_plugins', 'contacts', 'wpbc_contacts_page_handler');

    add_submenu_page('contacts', __('Add new', 'wpbc'), __('Add new', 'wpbc'), 'activate_plugins', 'contacts_form', 'wpbc_contacts_form_page_handler');
}

add_action('admin_menu', 'wpbc_admin_menu');