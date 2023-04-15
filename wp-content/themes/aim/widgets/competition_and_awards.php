<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_competition_and_awards_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'competition_and_awards';
    }
    public function get_title()
    {
        return esc_html__('competition_and_awards', 'elementor-competition_and_awards-widget');
    }
    public function get_keywords()
    {
        return ['competition_and_awards'];
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // dd($settings['list_items']);
        ?>

        <!-- Page -->
        <section class="kv kv-competition-award">
            <div class="container kv__inner">
                <h1 class="kv__title">
                    CUỘC THI<br>GIẢI THƯỞNG
                </h1>
                <p class="kv__text">AIM Academy vinh dự là đơn vị đại diện <br class="pc-only">chính thức của các cuộc thi và
                    giải thưởng <br class="pc-only">về Marketing & Communication tầm cỡ <br class="pc-only">thế giới</p>
                <img class="kv__image pc-only" width="413" height="590" src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-competition-award.png" alt="">
            </div>
        </section>

        <main class="main competition-award">
            <div class="container">

                <div class="statistic competition-award__statistic">
                    <div class="container statistic__inner">
                        <ul class="statistic__list">
                            <li class="statistic__item">
                                <img class="statistic__image" loading="lazy" width="150" height="150"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/icon-member.svg" alt="">
                                <p class="statistic__content">
                                    <span class="statistic__title js-counter" data-count="6000">0</span>
                                    <span class="statistic__text">Học viên tự tin tham gia<br class="pc-only"> thị trường lao
                                        động</span>
                                </p>
                            </li>
                            <li class="statistic__item">
                                <img class="statistic__image" loading="lazy" width="150" height="150"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/icon-hand.svg" alt="">
                                <p class="statistic__content">
                                    <span class="statistic__title js-counter" data-count="50">0</span>
                                    <span class="statistic__text">Chương trình đào tạo theo yêu cầu được<br class="pc-only"> tổ
                                        chức cho các khách hàng doanh nghiệp</span>
                                </p>
                            </li>
                            <li class="statistic__item">
                                <img class="statistic__image" loading="lazy" width="150" height="150"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/icon-cup.svg" alt="">
                                <p class="statistic__content">
                                    <span class="statistic__title js-counter" data-count="4700">0</span>
                                    <span class="statistic__text">Thí sinh tham gia cuộc thi<br class="pc-only"> tìm kiếm tài
                                        năng trẻ</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box competition-award__box">
                    <h2 class="heading">
                        VIETNAM YOUNG LIONS
                    </h2>
                    <p class="box__subtitle">
                        Cùng tài năng trẻ ghi dấu ấn <br class='sp-only'>Việt Nam trên bản đồ <br class='sp-only'>sáng tạo thế
                        giới
                    </p>
                    <p class="box__text">
                        Là cuộc thi danh giá nhất ngành Marketing & Communication, Vietnam Young Lions tìm kiếm những <br
                            class='pc-only'>tài năng trẻ đại diện Việt Nam tranh tài tại Young Lions (Cannes, Pháp) và Young
                        Spikes (Singapore). <br class='pc-only'>Sau nhiều năm tổ chức và cập nhật, cuộc thi trở thành sân chơi
                        quen thuộc của các bạn trẻ yêu <br class='pc-only'>sáng tạo muốn thử sức mình trong "biển lớn". Từ năm
                        2018, Vietnam Young Spikes chính thức được <br class='pc-only'>sáp nhập vào Vietnam Young Lions.
                    </p>
                </div>
                <ul class="competition-award__box-buttons">
                    <li><a href="#" class="button button--border competition-award__box-button">
                            <span>Vietnam Young Lions</span>
                        </a>
                    </li>
                    <li><a href="#" class="button button--border competition-award__box-button">
                            <span>Cannes Lions</span>
                        </a>
                    </li>
                    <li><a href="#" class="button button--border competition-award__box-button">
                            <span>Spikes Asia</span>
                        </a>
                    </li>
                    <li><a href="#" class="button button--border competition-award__box-button">
                            <span>Vietnam Young Spikes</span>
                        </a>
                    </li>
                </ul>

                <ul class="competition-award__grid pc-only">
                    <li class="competition-award__grid-item big"><img
                            src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-01.jpg" alt=""></li>
                    <li class="competition-award__grid-item"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-02.jpg"
                            alt=""></li>
                    <li class="competition-award__grid-item"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-03.jpg"
                            alt=""></li>
                    <li class="competition-award__grid-item"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-04.jpg"
                            alt=""></li>
                    <li class="competition-award__grid-item"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-05.jpg"
                            alt=""></li>
                </ul>

                <div class="swiper-container competition-award__grid sp-only">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-01.jpg" alt="">
                        </div>
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-02.jpg" alt="">
                        </div>
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-03.jpg" alt="">
                        </div>
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-04.jpg" alt="">
                        </div>
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/competition-img-05.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="box competition-award__box">
                    <h2 class="heading">
                        YOUTUBE WORKS AWARDS
                    </h2>
                    <p class="box__text">
                        YouTube Works là giải thưởng được phát triển bởi Google và Kantar Global, <br class='pc-only'>được hợp
                        tác tổ chức với AIM Academy tại Việt Nam. Giải thưởng tôn vinh <br class='pc-only'>những chiến dịch sáng
                        tạo và hiệu quả nhất trên YouTube.
                    </p>
                </div>
                <ul class="competition-award__box-buttons">
                    <li><a href="#" class="button button--border competition-award__box-button">
                            <span>YouTube Works Awards</span>
                        </a>
                    </li>
                </ul>


                <ul class="competition-award__gallery pc-only">
                    <li class="competition-award__gallery-item">
                        <img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/img-01.jpg" alt="">
                    </li>
                    <li class="competition-award__gallery-item">
                        <img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/img-02.jpg" alt="">
                    </li>
                </ul>

                <div class="swiper-container competition-award__gallery sp-only">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/img-01.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php bloginfo('template_directory') ?>/html/common/images/competition-award/img-02.jpg" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

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

        <?php
    }
}