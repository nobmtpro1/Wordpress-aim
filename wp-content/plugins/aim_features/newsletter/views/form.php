<?php
function form($data)
{
    ?>
    <div class="wrap">
        <h2>
            Newsletters <a class="add-new-h2" href="<?= admin_url('admin.php') ?>?page=aim_newsletter">Back</a>
        </h2>
        <form method="post" name="createuser" id="form" class="validate" novalidate="novalidate" action="<?= admin_url('admin-post.php') ?>">
            <input type="hidden" name="action" value="aim_newsletter_handle_add_or_edit">
            <input type="hidden" name="id" value="<?= @$data['newsletter']->id ?>">
            <table class="form-table" role="presentation">
                <tbody>
                    <tr>
                        <th scope="row"><label for="blogname"> Name<span class="description">(required)</span></label></th>
                        <td><input name="name" type="text" value="<?= @$data['newsletter']->name ?>" class="regular-text"></td>
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
                            <input name="email" type="email" class="regular-text" value="<?= @$data['newsletter']->email ?>">
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
                                    <input name="is_marketing" type="checkbox" value="1" <?= @$data['newsletter']->is_marketing == 1 ? 'checked' : '' ?>>
                                    Anyone can register
                                </label>
                            </fieldset>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit" class="button button-primary" value="Save">
            </p>
        </form>
    </div>
    <script>
        const form = document.querySelector("#form");
        form?.addEventListener("submit", function(e) {
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
                    alert(res?.data)
                    if (res?.success) {
                        window.location.href = window.location.href
                    }
                })
        })
    </script>
    <?php
}
?>


