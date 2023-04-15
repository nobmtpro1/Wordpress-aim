<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
class Elementor_mentors_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'mentors';
    }
    public function get_title()
    {
        return esc_html__('mentors', 'elementor-mentors-widget');
    }
    public function get_keywords()
    {
        return ['mentors'];
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // global $post;
        $categories = get_terms(
            array(
                'taxonomy' => 'trainer_category',
                'hide_empty' => false,
            )
        );
        $page = @sanitize_post(@$GLOBALS['wp_the_query']->get_queried_object());
        $term_slug = get_query_var('term');
        $paged = intval(@$_GET['page']) ?? 1;
        $posts = new WP_Query([
            'posts_per_page' => 4,
            'post_type' => 'trainer',
            'paged' => $paged,
            'tax_query' => $term_slug ? array(
                array(
                    'taxonomy' => 'trainer_category',
                    'field' => 'slug',
                    'terms' => @$term_slug,
                )
            ) : []
        ]);
        // dd($posts->posts);
        ?>

        <!-- Page -->

        <section class="kv kv-trainer">
            <div class="container kv__inner">
                <h1 class="kv__title">
                    ĐỘI NGŨ<br>GIẢNG VIÊN

                </h1>
                <p class="kv__text">Đội ngũ giảng viên và diễn giả khách mời giàu chuyên môn tại AIM Academy</p>
                <img class="kv__image pc-only" width="419" height="610"
                    src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-trainer.png" alt="">
                <div class="sp-only">
                    <a href="#" class="button button--white kv__button">
                        <span>ĐĂNG KÝ<br><small>ứng tuyển giảng viên</small></span>
                    </a>
                </div>
            </div>
        </section>

        <main class="main trainer">
            <div class="container">
                <div class="trainer-toolbar">
                    <form class="trainer-form form" action="/">
                        <div class="trainer-sort">
                            <select class="form-control--sort" id="category">
                                <option value="" selected disabled hidden>Lọc theo khóa học</option>
                                <?php foreach ($categories as $category): ?>
                                    <option <?= @$page->slug == @$category->slug ? 'selected' : '' ?>
                                        value="<?= get_term_link($category) ?>"><?= $category->name ?></option>
                                <?php endforeach ?>
                            </select>
                            <script>
                                const category = document.querySelector("#category")
                                category?.addEventListener('change', function (e) {
                                    window.location.href = e?.target?.value
                                })
                            </script>
                        </div>
                    </form>

                </div>

                <div class="trainer__content">
                    <div class="trainer__body">
                        <ul class="trainer__list">
                            <?php foreach ($posts->posts as $p): ?>
                                <li class="trainer__item">
                                    <figure class="trainer__card">
                                        <div class="trainer__image">
                                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/trainer/img.png"
                                                alt="">
                                        </div>
                                        <figcaption class="trainer__info">
                                            <a href="<?= get_permalink($p) ?>" class="trainer__name"><?= $p->post_title ?></a>
                                            <p class="trainer__position">Chief Executive Officer</p>
                                            <p class="trainer__company">APPROI</p>
                                        </figcaption>
                                    </figure>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <div class="pagination">
                            <ul class="pagination__list" id="pagination">

                                <?php
                                $links = paginate_links([
                                    'total' => $posts->max_num_pages,
                                    'current' => max(1, intval(@$_GET['page']) ?? 1),
                                    'prev_text' => __('<'),
                                    'next_text' => __('>'),
                                    'type' => 'array',
                                    'format' => '?page=%#%',
                                ]); foreach ($links ?? [] as $link):
                                    ?>
                                    <li class="pagination__item">
                                        <?= $link ?>
                                    </li>
                                <?php endforeach ?>

                                <script>
                                    const paginationLis = document.querySelectorAll("#pagination li")
                                    paginationLis?.forEach(e => {
                                        const a = e?.querySelector("a,span")
                                        a?.classList?.add("pagination__link")
                                        if (a?.classList?.contains("current")) {
                                            a?.classList?.add("pagination__link--active")
                                        }
                                    });
                                </script>
                            </ul>
                        </div>
                    </div>
                    <aside class="trainer__sidebar">
                        <div class="regis-box trainer__regis">
                            <p class="regis-box__text">Đội ngũ giảng viên và diễn giả khách mời giàu chuyên môn tại AIM Academy
                            </p>
                            <a data-toggle='modal' data-target='#form-trainer' class="button button--full regis-box__button">
                                <span>ĐĂNG KÝ<br><small>ứng tuyển giảng viên</small></span>
                            </a>
                        </div>
                    </aside>
                </div>
        </main>

        <section class="section-info">
            <div class="container">
                <h3 class="section-info-heading">CHÀO MỪNG BẠN ĐẾN VỚI AIM ACADEMY</h3>

                <p>Marketing là một lĩnh vực vô cùng rộng lớn với nguồn kiến thức không ngừng dịch chuyển mỗi ngày. Dù bạn là
                    người mới chập chững vào ngày hay đã làm lâu năm, hẳn bạn luôn thấy có nhiều điều mình chưa biết và cần cập
                    nhật cho công việc. </p>

                <p>Học marketing ở đâu? Cập nhật kiến thức như thế nào là bài bản nhưng vẫn “đón đầu” xu hướng? Đó là những băn
                    khoăn chung của nhiều marketers. AIM Academy tự hào là trung tâm đào tạo marketing & communication hàng đầu,
                    là điểm đến uy tín của nhiều thế hệ marketers muốn rèn luyện và nâng cấp bản thân mỗi ngày.</p>

                <h4 class="section-info-title">Hệ thống khóa học trải dài mọi phân ngành của marketing</h4>

                <p>Các khóa học về marketing tại AIM Academy được thiết kế đa dạng, từ client side đến agency side, từ cơ bản
                    đến nâng cao, từ thực thi đến chiến lược.</p>

                <h4 class="section-info-title">Đội ngũ giảng viên giàu kinh nghiệm</h4>

                <p>Đồng hành cùng AIM Academy là các giảng viên giàu chuyên môn, công tác tại nhiều loại hình doanh nghiệp, từ
                    các tập đoàn đa quốc gia, đến các doanh nghiệp vừa, nhỏ và startup với kinh nghiệm đa dạng trong nhiều lĩnh
                    vực.</p>

                <h4 class="section-info-title">Là đơn vị tổ chức nhiều cuộc thi và giải thưởng lớn</h4>

                <p>Bên cạnh hoạt động đào tạo, AIM Academy còn hân hạnh là đại diện các cuộc thi và giải thưởng danh giá về
                    marketing & communication tầm cỡ thế giới.</p>

                <p>AIM Academy cũng là đối tác tin cậy của nhiều khách hàng là những tập đoàn, doanh nghiệp lớn và tên tuổi trên
                    thị trường. </p>

            </div>
        </section>


        <!-- Modal Form Trainer-->
        <div class="modal fade" id="form-trainer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-full-sp">
                <div class="modal-content">
                    <img class="modal-close sp-only"
                        src="<?php bloginfo('template_directory') ?>/html/common/images/icon-close-red.svg" aria-label="Close"
                        alt="" aria-hidden="true" data-dismiss="modal" aria-label="Close">
                    <div class="modal-body">
                        <img class="modal-logo sp-only"
                            src="<?php bloginfo('template_directory') ?>/html/common/images/logo-black.svg" alt="">

                        <h3 class="heading modal-heading">ĐĂNG KÝ <br>TƯ VẤN NGHỀ NGHIỆP</h3>
                        <p class="modal-desc">Hãy để lại thông tin bên dưới, bộ phận Tư vấn sẽ chủ động liên hệ và trao đổi cùng
                            bạn trong 24 giờ.</p>

                        <form id="form" class="modal-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>">
                            <?= wp_nonce_field('a', 'a'); ?>
                            <!-- <input type="hidden" id="my_nonce" name="my_nonce" value="973f3e1829">
                        <input type="hidden" name="_wp_http_referer" value="/aim/trainer/"> -->
                            <div class="form-group">
                                <input class="form-input" type="text" name="name">
                                <label class="form-placeholder">Họ Tên<span class="text-red">*</span></label>
                            </div>
                            <div class="form-group">
                                <input class="form-input" type="email" name="email">
                                <label class="form-placeholder">Email<span class="text-red">*</span></label>
                            </div>
                            <div class="form-group">
                                <input class="form-input" type="tel" name="phone">
                                <label class="form-placeholder">Số điện thoại<span class="text-red">*</span></label>
                            </div>
                            <!-- <div class="form-group">
                                <select class="form-input form-select" required="required">
                                    <option value="" selected disabled hidden></option>
                                    <option value="1">Option 1</option>
                                    <option value="1">Option 2</option>
                                    <option value="1">Option 3</option>
                                    <option value="1">Option 4</option>
                                </select>
                                <label class="form-placeholder">Khóa học bạn muốn giảng dạy?<span
                                        class="text-red">*</span></label>
                            </div>
                            <div class="form-group">
                                <input class="form-file" type="file" name="" id="">
                                <p class="form-input"></p>
                                <label class="form-placeholder">CV (Curriculum Vitae) của bạn<span
                                        class="text-red">*</span></label>
                            </div> -->
                            <div class="form-group">
                                <input type="checkbox" class="form-checkbox" name="" id="checkbox-trainer" checked>
                                <label for="checkbox-trainer">
                                    Bằng cách nhấn GỬI ĐĂNG KÝ, tôi đồng ý với <a class="text-underline" href="#">Chính sách bảo
                                        mật<span class="text-red">*</span></a>
                                </label>
                            </div>
                            <button class="button button--full form-button">
                                <span>GỬI ĐĂNG KÝ</span>
                            </button>
                        </form>
                        <script type="text/javascript">
                            document.querySelector("#form").addEventListener("submit", function (e) {
                                e?.preventDefault()
                                var formData = new FormData(form);
                                var data = {}
                                for (var pair of formData.entries()) {
                                    data[pair[0]] = pair[1]
                                }
                                $.ajax({
                                    type: "post", //Phương thức truyền post hoặc get
                                    dataType: "json", //Dạng dữ liệu trả về xml, json, script, or html
                                    url: '<?php echo admin_url('admin-ajax.php'); ?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                                    data: {
                                        action: "submit_contact", //Tên action
                                        ...data,//Biến truyền vào xử lý. $_POST['website']
                                    },
                                    context: this,
                                    beforeSend: function () {
                                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                                    },
                                    success: function (response) {
                                        //Làm gì đó khi dữ liệu đã được xử lý
                                        if (response.success) {
                                            alert(response.data);
                                        }
                                        else {
                                            alert(response.data);
                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        //Làm gì đó khi có lỗi xảy ra
                                        console.log('The following error occured: ' + textStatus, errorThrown);
                                    }
                                })
                                return false
                            })
                        </script>
                    </div>
                    <div class="modal-footer">
                        <img class="modal-logo" src="<?php bloginfo('template_directory') ?>/html/common/images/logo.svg"
                            alt="">
                        <img class="modal-close" src="<?php bloginfo('template_directory') ?>/html/common/images/icon-close.svg"
                            aria-label="Close" alt="" aria-hidden="true" data-dismiss="modal" aria-label="Close">
                        <img class="modal-background"
                            src="<?php bloginfo('template_directory') ?>/html/common/images/form/trainer.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}