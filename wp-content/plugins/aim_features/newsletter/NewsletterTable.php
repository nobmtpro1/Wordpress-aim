<?php

namespace aim_features\newsletter;

if (!class_exists('WP_List_Table')) {

    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class NewsletterTable extends \WP_List_Table
{
    function __construct()
    {
        global $status, $page;

        parent::__construct(
            array(
                'singular' => 'newsletter',
                'plural' => 'newsletters',
            )
        );
    }

    public function search_box($text, $input_id)
    {
        if (empty($_REQUEST['s']) && !$this->has_items()) {
            return;
        }

        $input_id = $input_id . '-search-input';

        if (!empty($_REQUEST['orderby'])) {
            echo '<input type="hidden" name="orderby" value="' . esc_attr($_REQUEST['orderby']) . '" />';
        }
        if (!empty($_REQUEST['order'])) {
            echo '<input type="hidden" name="order" value="' . esc_attr($_REQUEST['order']) . '" />';
        }
        if (!empty($_REQUEST['post_mime_type'])) {
            echo '<input type="hidden" name="post_mime_type" value="' . esc_attr($_REQUEST['post_mime_type']) . '" />';
        }
        if (!empty($_REQUEST['detached'])) {
            echo '<input type="hidden" name="detached" value="' . esc_attr($_REQUEST['detached']) . '" />';
        }
?>
        <p class="search-box">
            <label class="screen-reader-text" for="<?php echo esc_attr($input_id); ?>"><?php echo $text; ?>:</label>
            <input type="search" id="<?php echo esc_attr($input_id); ?>" name="s" value="<?php _admin_search_query(); ?>" />
            <?php submit_button($text, '', '', false, array('id' => 'search-submit')); ?>
        </p>
<?php
    }


    function column_default($item, $column_name)
    {
        return $item[$column_name];
    }

    function column_name($item)
    {
        $id = $item['id'];
        $actions = array(
            'edit' => "<a href='?page=aim_newsletter_edit&id={$id}'>Edit</a>",
            'delete' => '<a href="javascript:" data-id="' . $id . '" class="delete-newsletter">Delete</a>',
        );

        return sprintf(
            '%s %s',
            $item['name'],
            $this->row_actions($actions)
        );
    }

    function column_cb($item)
    {
        return sprintf(
            '<input type="checkbox" name="id[]" value="%s" />',
            $item['id']
        );
    }

    function get_columns()
    {
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'name' => __('Name', 'wpbc'),
            'email' => __('E-Mail', 'wpbc'),
            'is_marketing' => __('Is marketing', 'wpbc'),
            'sync' => "Sync",
        );
        return $columns;
    }

    function get_sortable_columns()
    {
        $sortable_columns = array(
            'name' => array('name', true),
            'email' => array('email', true),
            'is_marketing' => array('is_marketing', true),
        );
        return $sortable_columns;
    }

    function get_bulk_actions()
    {
        $actions = array(
            'delete' => 'Delete'
        );
        return $actions;
    }

    function process_bulk_action()
    {
        if ('delete' === $this->current_action()) {
            $ids = isset($_REQUEST['id']) ? $_REQUEST['id'] : array();
            if (is_array($ids))
                $ids = implode(',', $ids);

            if (!empty($ids)) {
                try {
                    // Newsletter::whereIn('id', explode(",", $ids))->delete();
                } catch (\Exception $e) {
                }
            }
        }
    }

    function prepare_items()
    {
        // dd($_REQUEST);
        global $wpdb;
        $s = @$_REQUEST['s'];
        $per_page = 10;
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->process_bulk_action();
        $paged = isset($_REQUEST['paged']) ? max(1, intval($_REQUEST['paged'])) : 1;
        $orderby = (isset($_REQUEST['orderby']) && in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns()))) ? $_REQUEST['orderby'] : 'id';
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : 'desc';

        $total = 1;
        $data = $wpdb->get_results('SELECT * FROM ' . AIM_NEWSLETTER_TABLE, ARRAY_A);
        // dd($data);

        foreach ($data as $key => $value) {
            $data[$key]['sync'] = '<a data-id="' . $value['id'] . '" class="button sync-newsletter">Sync</a>';
        }
        $this->items = $data;

        $this->set_pagination_args(
            array(
                'total_items' => $total,
                'per_page' => $per_page,
                'total_pages' => ceil($total / $per_page)
            )
        );
    }
}
