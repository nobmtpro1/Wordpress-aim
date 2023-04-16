<?php
namespace modules\newsletter\admin;

use App\Models\Newsletter;
use modules\newsletter\table\NewsletterTable;

class NewslettersAdmin
{
    static public function index()
    {
        $my_action = @$_REQUEST['my_action'] ?? null;

        switch ($my_action) {
            case 'add':
                return self::edit();
            case 'edit':
                return self::edit();
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
        ?>
        <div class="wrap">
            <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
            <h2>
                <?php _e('Newsletters', 'wpbc') ?> <a class="add-new-h2"
                    href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=newsletters'); ?>&my_action=add"><?php _e('Add new', 'wpbc') ?></a>
            </h2>
            <?php echo $message; ?>
            <form id="contacts-table" method="GET">
                <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
                <?php $table->search_box('Search', 'Search') ?>
                <?php $table->display() ?>
            </form>
        </div>

        <script>
            const form = document.querySelector("#contacts-table");
            form?.addEventListener("click", function (element) {
                if (element.target && element.target.classList?.contains("sync-newsletter")) {
                    let data = new FormData();
                    data.append("action", "sync_newsletter");
                    data.append("id", element.target?.getAttribute("data-id"));
                    fetch('<?= admin_url('admin-ajax.php') ?>', {
                        method: 'POST',
                        body: data
                    }).then(res => res.json())
                        .then(res => {
                            alert(res?.data)
                        })
                }
                if (element.target && element.target.classList?.contains("delete-newsletter")) {
                    if (confirm("Are you sure?")) {
                        let data = new FormData();
                        data.append("action", "delete_newsletter");
                        data.append("id", element.target?.getAttribute("data-id"));
                        fetch('<?= admin_url('admin-ajax.php') ?>', {
                            method: 'POST',
                            body: data
                        }).then(res => res.json())
                            .then(res => {
                                if (res?.success) {
                                    window.location.href = window.location.href
                                } else {
                                    alert(res?.data)
                                }
                            })
                    }
                }
            })
        </script>
        <?php
    }

    static public function edit()
    {
        $newsletter = Newsletter::find(@$_REQUEST['id']);
        ?>

        <div class="wrap">
            <h1 id="add-new-user">Edit Newsletter</h1>
            <form method="post" name="createuser" id="form" class="validate" novalidate="novalidate"
                action="<?= admin_url('admin-post.php') ?>">
                <input type="hidden" name="action" value="edit_newsletter">
                <input type="hidden" name="id" value="<?= @$newsletter->id ?>">
                <table class="form-table" role="presentation">
                    <tbody>

                        <tr>
                            <th scope="row"><label for="blogname"> Name<span class="description">(required)</span></label></th>
                            <td><input name="name" type="text" value="<?= @$newsletter->name ?>" class="regular-text"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="email">
                                    Email
                                    <span class="description">
                                        (required)
                                    </span>
                                </label>
                            </th>
                            <td>
                                <input name="email" type="email" class="regular-text" value="<?= @$newsletter->email ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Is marketing</th>
                            <td>
                                <fieldset>
                                    <legend class="screen-reader-text">
                                        <span>
                                            Membership
                                        </span>
                                    </legend>
                                    <label for="users_can_register">
                                        <input name="is_marketing" type="checkbox" value="1" <?= @$newsletter->is_marketing == 1 ? 'checked' : '' ?>>
                                        Anyone can register
                                    </label>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="submit">
                    <input type="submit" class="button button-primary" value="Add New User">
                </p>
            </form>
        </div>
        <script>
            const form = document.querySelector("#form");
            form?.addEventListener("submit", function (e) {
                e.preventDefault();
                const data = new URLSearchParams();
                for (const pair of new FormData(form)) {
                    data.append(pair[0], pair[1]);
                }

                fetch('<?= admin_url('admin-ajax.php') ?>', {
                    method: 'POST',
                    body: data
                }).then(res => res.json())
                    .then(res => {
                        if (res?.success) {
                            window.location.href = window.location.href
                        } else {
                            alert(res?.data)
                        }
                    })
            })
        </script>
        <?php
    }
}