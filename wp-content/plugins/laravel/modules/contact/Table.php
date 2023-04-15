<?php
use App\Models\Contact;

if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class Custom_Table_Example_List_Table extends WP_List_Table
{
    function __construct()
    {
        global $status, $page;

        parent::__construct(
            array(
                'singular' => 'contact',
                'plural' => 'contacts',
            )
        );
    }


    function column_default($item, $column_name)
    {
        return $item[$column_name];
    }

    function column_name($item)
    {

        $actions = array(
            'edit' => sprintf('<a href="?page=contacts_form&id=%s">%s</a>', $item['id'], __('Edit', 'wpbc')),
            'delete' => sprintf('<a href="?page=%s&action=delete&id=%s">%s</a>', $_REQUEST['page'], $item['id'], __('Delete', 'wpbc')),
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
        );
        return $columns;
    }

    function get_sortable_columns()
    {
        $sortable_columns = array(
            'name' => array('name', true),
            'email' => array('email', true),
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
                    Contact::whereIn('id', explode(",", $ids))->delete();
                } catch (\Exception $e) {
                }
                // $wpdb->query("DELETE FROM $table_name WHERE id IN($ids)");
            }
        }
    }

    function prepare_items()
    {
        $per_page = 10;
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->process_bulk_action();
        $paged = isset($_REQUEST['paged']) ? max(1, intval($_REQUEST['paged'])) : 1;
        $orderby = (isset($_REQUEST['orderby']) && in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns()))) ? $_REQUEST['orderby'] : 'id';
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : 'desc';

        $total = Contact::count();
        $data = Contact::orderby($orderby, $order)->skip(($paged - 1) * $per_page)->take($per_page)->get()->toArray();
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