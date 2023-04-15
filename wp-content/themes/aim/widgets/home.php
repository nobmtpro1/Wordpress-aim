<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor home Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_home_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'home';
    }
    public function get_title()
    {
        return esc_html__('home', 'elementor-home-widget');
    }
    public function get_keywords()
    {
        return ['home'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('List Content', 'elementor-list-widget'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        /* Start repeater */

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'elementor-home-widget'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'elementor-home-widget'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'elementor-home-widget'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'elementor-home-widget'),
                'type' => \Elementor\Controls_Manager::ICON,
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        /* End repeater */

        $this->add_control(
            'list_items',
            [
                'label' => esc_html__('List Items', 'elementor-home-widget'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // dd($settings['list_items']);
        ?>
        <!-- Page -->
        <section class="kv kv-home">
            <div class="container kv__inner">
                <h1 class="kv__title">
                    <span class="kv__subtitle">VIDEO SERIES</span>
                    HIỂU NGHỀ ĐỂ<br>CHỌN NGHỀ
                </h1>
                <a href="#" class="button button--white kv__button">
                    <span>XEM NGAY</span>
                </a>
                <img class="kv__image pc-only" width="1120" height="1205"
                    src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-home-img.png" alt="">
            </div>
        </section>

        <div class="statistic">
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
                            <span class="statistic__text">Chương trình đào tạo theo yêu cầu được<br class="pc-only"> tổ chức cho
                                các khách hàng doanh nghiệp</span>
                        </p>
                    </li>
                    <li class="statistic__item">
                        <img class="statistic__image" loading="lazy" width="150" height="150"
                            src="<?php bloginfo('template_directory') ?>/html/common/images/icon-cup.svg" alt="">
                        <p class="statistic__content">
                            <span class="statistic__title js-counter" data-count="4700">0</span>
                            <span class="statistic__text">Thí sinh tham gia cuộc thi<br class="pc-only"> tìm kiếm tài năng
                                trẻ</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <section class="home-educate container">
            <div class="home-educate__item">
                <div class="home-educate__content">
                    <img class="home-educate__image" loading="lazy" width="153" height="150"
                        src="<?php bloginfo('template_directory') ?>/html/common/images/icon-edu-01.svg" alt="">
                    <div class="home-educate__body">
                        <h2 class="heading home-educate__title">ĐÀO TẠO <br class="pc-only">ĐẠI CHÚNG</h2>
                        <p>20 môn học Marketing & Communication trải rộng mọi phân ngành, từ phía client đến agency, từ cơ bản
                            đến nâng
                            cao, từ chiến lược đến thực chiến</p>
                    </div>
                </div>
                <div class="home-educate__footer">
                    <a href="#" class="button button--border home-educate__button">
                        <span>Xem thêm</span>
                    </a>
                    <a href="#" class="button button--border home-educate__button">
                        <span>Tư vấn ngay</span>
                    </a>
                </div>
            </div>
            <div class="home-educate__item">
                <div class="home-educate__content">
                    <img class="home-educate__image" loading="lazy" width="115" height="150"
                        src="<?php bloginfo('template_directory') ?>/html/common/images/icon-edu-02.svg" alt="">
                    <div class="home-educate__body">
                        <h2 class="heading home-educate__title">ĐÀO TẠO <br>THEO YÊU CẦU</h2>
                        <p>Các khóa đào tạo Marketing & Communication thiết kế riêng cho doanh nghiệp, giúp doanh nghiệp luôn
                            đón đầu
                            những thay đổi trong công nghệ và hành vi khách hàng</p>
                    </div>
                </div>
                <div class="home-educate__footer">
                    <a href="#" class="button button--border home-educate__button">
                        <span>Xem thêm</span>
                    </a>
                    <a href="#" class="button button--border home-educate__button">
                        <span>Gửi yêu cầu đào tạo</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="home-competition">
            <div class="container">

                <div class="box">
                    <h2 class="heading">
                        CUỘC THI VÀ GIẢI THƯỞNG
                    </h2>
                    <p class="box__text">
                        AIM Academy là đại diện tổ chức Vietnam Young Lions - cuộc thi danh giá nhất<br class='pc-only'>ngành
                        Marketing & Communication, và
                        YouTube Works Awards tại Việt Nam - giải<br class='pc-only'> thưởng tôn vinh những chiến dịch sáng tạo
                        trên YouTube
                    </p>
                    <a href="#" class="button button--border box__button">
                        <span>Xem Thêm</span>
                    </a>
                </div>
                <!-- Slider main container -->
                <div class="swiper-container home-competition__swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img loading="lazy" width="655" height="550"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/educate-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="655" height="550"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/educate-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="655" height="550"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/educate-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="655" height="550"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/educate-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="655" height="550"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/educate-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>

        <section class="home-career">
            <div class="container">
                <div class="box">
                    <h2 class="heading">
                        KẾT NỐI TUYỂN DỤNG
                    </h2>
                    <p class="box__text">
                        Trang tuyển dụng kết nối cơ hội việc làm chất lượng với lực lượng lao động<br class='pc-only'> có trình
                        độ cao trong ngành Marketing
                        & Communication
                    </p>
                    <a href="#" class="button button--border box__button">
                        <span>Xem Thêm</span>
                    </a>
                </div>
                <ul class="home-career__list">
                    <li class="home-career__item">
                        <a href="#" class="home-career__link">
                            <figure>
                                <img loading="lazy" width="810" height="841"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/home/career-img-01.jpg"
                                    alt="">
                                <figcaption>
                                    <p class="home-career__title">JOB POSTING</p>
                                    <p class="home-career__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis
                                        nostrud exerci tation ullamcorper suscipit lobortis nisl </p>
                                </figcaption>
                            </figure>
                        </a>
                        <h3 class="home-career__heading">
                            JOB POSTING
                        </h3>
                    </li>
                    <li class="home-career__item">
                        <a href="#" class="home-career__link">
                            <figure>
                                <img loading="lazy" width="810" height="841"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/home/career-img-02.jpg"
                                    alt="">
                                <figcaption>
                                    <p class="home-career__title">JOB SEARCHING</p>
                                    <p class="home-career__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis
                                        nostrud exerci tation ullamcorper suscipit lobortis nisl </p>
                                </figcaption>
                            </figure>
                        </a>
                        <h3 class="home-career__heading">
                            JOB SEARCHING
                        </h3>
                    </li>
                </ul>
            </div>
        </section>

        <section class="home-blog">
            <div class="container">
                <h2 class="heading home-blog__heading">BLOG & TÀI LIỆU</h2>

                <!-- Slider main container -->
                <div class="home-blog__swiper">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper home-blog__list">
                            <!-- Slides -->
                            <div class="swiper-slide home-blog__item">
                                <div class="home-blog__article">
                                    <a href="#" class="button button--border home-blog__button">
                                        <span>Đọc tiếp</span>
                                    </a>
                                    <div class="home-blog__body">
                                        <h3 class="home-blog__title">Tối Ưu Hóa Chiến Dịch Digital Mùa Tết Về Creative Và Media
                                        </h3>
                                        <p class="home-blog__text">Chiến dịch Tết luôn là "hố đen" tiêu tiền của mọi thương
                                            hiệu. Tiêu tốn nhiều chi phí là thế nhưng không phải cứ đánh là đã thắng. Làm sao để
                                            tối ưu hóa chiến dịch mùa Tết năm 2021 của bạn, cả về Nội dung (Creative) lẫn Kênh
                                            truyền thông (Media)? ...</p>
                                    </div>
                                    <div class="home-blog__image"><img loading="lazy"
                                            src="<?php bloginfo('template_directory') ?>/html/common/images/home/blog-img.jpg"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-slide home-blog__item">
                                <div class="home-blog__article">
                                    <a href="#" class="button button--border home-blog__button">
                                        <span>Đọc tiếp</span>
                                    </a>
                                    <div class="home-blog__body">
                                        <h3 class="home-blog__title">Tối Ưu Hóa Chiến Dịch Digital Mùa Tết Về Creative Và Media
                                        </h3>
                                        <p class="home-blog__text">Chiến dịch Tết luôn là "hố đen" tiêu tiền của mọi thương
                                            hiệu. Tiêu tốn nhiều chi phí là thế nhưng không phải cứ đánh là đã thắng. Làm sao để
                                            tối ưu hóa chiến dịch mùa Tết năm 2021 của bạn, cả về Nội dung (Creative) lẫn Kênh
                                            truyền thông (Media)? ...</p>
                                    </div>
                                    <div class="home-blog__image"><img loading="lazy"
                                            src="<?php bloginfo('template_directory') ?>/html/common/images/home/blog-img.jpg"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-slide home-blog__item">
                                <div class="home-blog__article">
                                    <a href="#" class="button button--border home-blog__button">
                                        <span>Đọc tiếp</span>
                                    </a>
                                    <div class="home-blog__body">
                                        <h3 class="home-blog__title">Tối Ưu Hóa Chiến Dịch Digital Mùa Tết Về Creative Và Media
                                        </h3>
                                        <p class="home-blog__text">Chiến dịch Tết luôn là "hố đen" tiêu tiền của mọi thương
                                            hiệu. Tiêu tốn nhiều chi phí là thế nhưng không phải cứ đánh là đã thắng. </p>
                                    </div>
                                    <div class="home-blog__image"><img loading="lazy"
                                            src="<?php bloginfo('template_directory') ?>/html/common/images/home/blog-img.jpg"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button swiper-button-prev"></div>
                    <div class="swiper-button swiper-button-next"></div>
                </div>

                <a class="home-blog__viewmore" href="#">
                    Xem tất cả
                    <img loading="lazy" width="300" height="31"
                        src="<?php bloginfo('template_directory') ?>/html/common/images/icon-arrow.svg" alt="">
                </a>

            </div>
        </section>

        <section class="home-ebook">
            <div class="container">
                <ul class="home-ebook__list">
                    <li class="home-ebook__item">
                        <a href="#" class="home-ebook__link">
                            <img class="home-ebook__image" loading="lazy" width="618" height="451"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/ebook-01.jpg" alt="">
                            <h3 class="home-ebook__title">KHO EBOOK</h3>
                        </a>
                    </li>
                    <li class="home-ebook__item">
                        <a href="#" class="home-ebook__link">
                            <img class="home-ebook__image" loading="lazy" width="618" height="451"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/ebook-02.jpg" alt="">
                            <h3 class="home-ebook__title">ĐỒ ÁN TỐT NGHIỆP</h3>
                        </a>
                    </li>
                    <li class="home-ebook__item">
                        <a href="#" class="home-ebook__link">
                            <img class="home-ebook__image" loading="lazy" width="618" height="451"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/ebook-03.jpg" alt="">
                            <h3 class="home-ebook__title">DIGITAL TEST</h3>
                        </a>
                    </li>
                    <li class="home-ebook__item">
                        <a href="#" class="home-ebook__link">
                            <img class="home-ebook__image" loading="lazy" width="618" height="451"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/home/ebook-04.jpg" alt="">
                            <h3 class="home-ebook__title">VIDEO ĐỊNH HƯỚNG<br>NGHỀ NGHIỆP</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="home-event">
            <div class="container">
                <div class="home-event__swiper">
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide home-event__article">
                                <p class="home-event__cat">SỰ KIỆN</p>
                                <h3 class="home-event__title">[SEMINAR] CHINH PHỤC TIKTOK - KHAI PHÁ NGUỒN KHÁCH HÀNG KHỔNG LỒ
                                </h3>
                                <img class="home-event__image" loading="lazy" width="614" height="461"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/home/event-img.jpg" alt="">
                                <p class="home-event__text">Năm 2020 có thể gọi là một giai đoạn thử thách chưa từng có đối với
                                    nhiều doanh nghiệp. Dù thị trường nhìn chung nhiều sóng gió, nhưng vẫn tồn tại những điểm
                                    sáng tích cực để bạn nắm bắt với sự linh hoạt, nhạy bén của người làm kinh doanh. Là chủ
                                    doanh nghiệp, nhân sự kinh doanh hay marketing, bạn cần nhìn lại bức tranh tổng quát về thị
                                    trường trong năm qua và đề ra hướng đi tiếp theo cho năm 2021 đang đến rất gần.</p>
                                <a href="#" class="button button--border home-event__button">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                            <div class="swiper-slide home-event__article">
                                <p class="home-event__cat">SỰ KIỆN</p>
                                <h3 class="home-event__title">[SEMINAR] CHINH PHỤC TIKTOK - KHAI PHÁ NGUỒN KHÁCH HÀNG KHỔNG LỒ
                                </h3>
                                <img class="home-event__image" loading="lazy" width="614" height="461"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/home/event-img.jpg" alt="">
                                <p class="home-event__text">Năm 2020 có thể gọi là một giai đoạn thử thách chưa từng có đối với
                                    nhiều doanh nghiệp. Dù thị trường nhìn chung nhiều sóng gió, nhưng vẫn tồn tại những điểm
                                    sáng tích cực để bạn nắm bắt với sự linh hoạt, nhạy bén của người làm kinh doanh. Là chủ
                                    doanh nghiệp, nhân sự kinh doanh hay marketing, bạn cần nhìn lại bức tranh tổng quát về thị
                                    trường trong năm qua và đề ra hướng đi tiếp theo cho năm 2021 đang đến rất gần.</p>
                                <a href="#" class="button button--border home-event__button">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                            <div class="swiper-slide home-event__article">
                                <p class="home-event__cat">SỰ KIỆN</p>
                                <h3 class="home-event__title">[SEMINAR] CHINH PHỤC TIKTOK - KHAI PHÁ NGUỒN KHÁCH HÀNG KHỔNG LỒ
                                </h3>
                                <img class="home-event__image" loading="lazy" width="614" height="461"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/home/event-img.jpg" alt="">
                                <p class="home-event__text">Năm 2020 có thể gọi là một giai đoạn thử thách chưa từng có đối với
                                    nhiều doanh nghiệp. Dù thị trường nhìn chung nhiều sóng gió, nhưng vẫn tồn tại những điểm
                                    sáng tích cực để bạn nắm bắt với sự linh hoạt, nhạy bén của người làm kinh doanh. Là chủ
                                    doanh nghiệp, nhân sự kinh doanh hay marketing, bạn cần nhìn lại bức tranh tổng quát về thị
                                    trường trong năm qua và đề ra hướng đi tiếp theo cho năm 2021 đang đến rất gần.</p>
                                <a href="#" class="button button--border home-event__button">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                            <div class="swiper-slide home-event__article">
                                <p class="home-event__cat">SỰ KIỆN</p>
                                <h3 class="home-event__title">[SEMINAR] CHINH PHỤC TIKTOK - KHAI PHÁ NGUỒN KHÁCH HÀNG KHỔNG LỒ
                                </h3>
                                <img class="home-event__image" loading="lazy" width="614" height="461"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/home/event-img.jpg" alt="">
                                <p class="home-event__text">Năm 2020 có thể gọi là một giai đoạn thử thách chưa từng có đối với
                                    nhiều doanh nghiệp. Dù thị trường nhìn chung nhiều sóng gió, nhưng vẫn tồn tại những điểm
                                    sáng tích cực để bạn nắm bắt với sự linh hoạt, nhạy bén của người làm kinh doanh. Là chủ
                                    doanh nghiệp, nhân sự kinh doanh hay marketing, bạn cần nhìn lại bức tranh tổng quát về thị
                                    trường trong năm qua và đề ra hướng đi tiếp theo cho năm 2021 đang đến rất gần.</p>
                                <a href="#" class="button button--border home-event__button">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                            <div class="swiper-slide home-event__article">
                                <p class="home-event__cat">SỰ KIỆN</p>
                                <h3 class="home-event__title">[SEMINAR] CHINH PHỤC TIKTOK - KHAI PHÁ NGUỒN KHÁCH HÀNG KHỔNG LỒ
                                </h3>
                                <img class="home-event__image" loading="lazy" width="614" height="461"
                                    src="<?php bloginfo('template_directory') ?>/html/common/images/home/event-img.jpg" alt="">
                                <p class="home-event__text">Năm 2020 có thể gọi là một giai đoạn thử thách chưa từng có đối với
                                    nhiều doanh nghiệp. Dù thị trường nhìn chung nhiều sóng gió, nhưng vẫn tồn tại những điểm
                                    sáng tích cực để bạn nắm bắt với sự linh hoạt, nhạy bén của người làm kinh doanh. Là chủ
                                    doanh nghiệp, nhân sự kinh doanh hay marketing, bạn cần nhìn lại bức tranh tổng quát về thị
                                    trường trong năm qua và đề ra hướng đi tiếp theo cho năm 2021 đang đến rất gần.</p>
                                <a href="#" class="button button--border home-event__button">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button swiper-button-prev"></div>
                    <div class="swiper-button swiper-button-next"></div>
                </div>
            </div>
        </section>

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