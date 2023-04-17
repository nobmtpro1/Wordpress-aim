<?php

function newsletter_form($data)
{
    ob_start();
    ?>
    <form action="" id="form-newsletter">
        <input type="hidden" name="action" value="edit_newsletter">
        <input type="text" name="name" id="" placeholder="Họ và tên*">
        <input type="text" name="email" id="" placeholder="Email*">
        <p>Bạn có đang làm trong ngành Marketing & Communication không?*</p>
        <label><input type="radio" name="is_marketing"><span class="indicator"></span>Có</label>
        <label><input type="radio" name="newsletter-check" id="">
            <span class="indicator"></span>
            Không
        </label>
        <p>Cách chúng tôi sử dụng <a href="#">thông tin của bạn</a></p>
        <button type="submit">Gửi đăng ký</button>
    </form>
    <script>
        const form = document.querySelector("#form-newsletter");
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
   $content = ob_get_clean();
    return $content;
}
