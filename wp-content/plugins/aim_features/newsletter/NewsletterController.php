<?php

namespace aim_features\newsletter;

use aim_features\newsletter\NewsletterTable;

class NewsletterController
{

    static public function index()
    {
        switch (@$_REQUEST['my_action']) {
            case 'add_or_edit':
                return self::add_or_edit();
            default:
                return self::list();
        }
    }

    static public function list()
    {
        $table = new NewsletterTable();
        $table->prepare_items();

        $message = '';
        if ('delete' === $table->current_action()) {
            $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('Items deleted: %d', 'wpbc'), '1') . '</p></div>';
        }

        require plugin_dir_path(__FILE__) . '/views/list.php';
    }

    static public function add_or_edit()
    {
        global $wpdb;
        $newsletter = $wpdb->get_row('select * from ' . AIM_NEWSLETTER_TABLE . ' where id = ' . @$_REQUEST['id']);
        require plugin_dir_path(__FILE__) . '/views/form.php';
    }

    static public function handle_add_or_edit()
    {
        // dd(123);
        $id = @$_REQUEST['id'];
        $name = @$_REQUEST['name'];
        $email = @$_REQUEST['email'];
        $is_marketing = @$_REQUEST['is_marketing'];

        $error_message = [];
        if (!$name) {
            $error_message[] = "Name is required";
        }
        if (strlen($name) > 100) {
            $error_message[] = "Name is too long";
        }
        if (!$email) {
            $error_message[] = "Email is required";
        }
        if (strlen($email) > 100) {
            $error_message[] = "Email is too long";
        }
        if (count($error_message) > 0) {
            return wp_send_json_error($error_message[0]);
        }

        global $wpdb;
        if ($id) {
            $wpdb->update(AIM_NEWSLETTER_TABLE, ['name' => $name, 'email' => $email, 'is_marketing' =>  $is_marketing], ['id' => $id]);
        } else {
            $wpdb->insert(AIM_NEWSLETTER_TABLE, ['name' => $name, 'email' => $email, 'is_marketing' =>  $is_marketing]);
        }

        return wp_send_json_success('Success');
    }
}
