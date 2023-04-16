<?php
function wpbc_contacts_page_handler()
{
    global $wpdb;

    $table = new Custom_Table_Example_List_Table();
    $table->prepare_items();

    $message = '';
    if ('delete' === $table->current_action()) {
        $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('Items deleted: %d', 'wpbc'), '1') . '</p></div>';
    }
    ?>
    <div class="wrap">

        <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
        <h2>
            <?php _e('Contacts', 'wpbc') ?> <a class="add-new-h2"
                href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=contacts_form'); ?>"><?php _e('Add new', 'wpbc') ?></a>
        </h2>
        <?php echo $message; ?>

        <form id="contacts-table" method="POST">
            <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
            <?php $table->display() ?>
        </form>

    </div>
    <?php
}

