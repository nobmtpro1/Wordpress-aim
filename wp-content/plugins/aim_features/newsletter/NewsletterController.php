<?php

namespace aim_features\newsletter;

use aim_features\newsletter\NewsletterTable;
use Rakit\Validation\Validator;

class NewsletterController
{
    public static function index()
    {
        switch (@$_REQUEST['my_action']) {
            case 'add_or_edit':
                return self::add_or_edit();
            default:
                return self::list();
        }
    }

    public static function list()
    {
        $table = new NewsletterTable();
        $table->prepare_items();

        $message = '';
        if ('delete' === $table->current_action()) {
            $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('Items deleted: %d', 'wpbc'), '1') . '</p></div>';
        }

        ob_start();
        require plugin_dir_path(__FILE__) . '/views/list.php';
        $content = ob_get_clean();
        echo $content;
    }

    public static function add_or_edit()
    {
        global $wpdb;
        $newsletter = $wpdb->get_row('select * from ' . AIM_NEWSLETTER_TABLE . ' where id = ' . @$_REQUEST['id']);

        require plugin_dir_path(__FILE__) . '/views/form.php';
        return form(['newsletter' => $newsletter]);
    }

    public static function handle_add_or_edit()
    {
        $id = @$_REQUEST['id'];
        $name = @$_REQUEST['name'];
        $email = @$_REQUEST['email'];
        $is_marketing = @$_REQUEST['is_marketing'];

        $validator = new Validator();
        $validation = $validator->make($_POST, [
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
        ]);
        $validation->validate();
        if ($validation->fails()) {
            return wp_send_json_error(array_values($validation->errors()->firstOfAll())[0]);
        }

        global $wpdb;
        if ($id) {
            $wpdb->update(AIM_NEWSLETTER_TABLE, ['name' => $name, 'email' => $email, 'is_marketing' =>  $is_marketing], ['id' => $id]);
        } else {
            $wpdb->insert(AIM_NEWSLETTER_TABLE, ['name' => $name, 'email' => $email, 'is_marketing' =>  $is_marketing]);
        }

        return wp_send_json_success('Success');
    }

    public static function newsletter_form()
    {
        require plugin_dir_path(__FILE__) . '/views/newsletter_form.php';
        return newsletter_form([]);
    }
}
