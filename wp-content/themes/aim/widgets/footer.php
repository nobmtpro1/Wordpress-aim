<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor footer Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_footer_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'footer';
    }
    public function get_title()
    {
        return esc_html__('footer', 'elementor-footer-widget');
    }
    public function get_keywords()
    {
        return ['footer'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'elementor-footer-widget'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'logo',
            [
                'label' => esc_html__('Logo', 'elementor-footer-widget'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ],
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-info">
                        <img class="footer-info__image" loading="lazy" width="300" height="99"
                            src="<?php bloginfo('template_directory') ?>/html/common/images/logo.svg" alt="">
                        <div class="footer-info__inner">
                            <p>Thành lập từ năm 2011, AIM Academy là trung tâm đào tạo thực tế hàng đầu về các môn học Marketing
                                & Communication. Thông qua đào tạo kỹ năng, tổ chức cuộc thi và giải thưởng, kết nối tuyển dụng,
                                AIM Academy mong muốn ngày càng nâng tầm chuẩn mực của ngành Marketing & Communication tại Việt
                                Nam.</p>
                            <ul class="footer-info__menu">
                                <li><a href="#">Đào tạo đại chúng</a></li>
                                <li><a href="#">Đào tạo theo yêu cầu</a></li>
                                <li><a href="#">Các khóa học</a></li>
                                <li><a href="#">Chính sách ưu đãi</a></li>
                                <li><a href="#">Cuộc thi và giải thưởng</a></li>
                                <li><a href="#">Kết nối tuyển dụng</a></li>
                            </ul>
                            <ul class="footer-info__menu">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Video định hướng nghề nghiệp</a></li>
                                <li><a href="#"> Kho Ebook</a></li>
                                <li><a href="#">Digital Test</a></li>
                                <li><a href="#">Đồ án tốt nghiệp</a></li>
                                <li><a href="#">Sự kiện</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-contact">
                        <h3 class="title footer-contact__title">Liên hệ</h3>
                        <address>Địa chỉ: 146 Bis, đường Nguyễn Văn Thủ, phường Đa Kao, quận 1, TP. HCM</address>
                        <p>Điện thoại: <a href="tel:+84931333150">+84 93 1333 150</a></p>
                        <p>Email: <a href="mailto:contact@aimacademy.vn">contact@aimacademy.vn</a></p>

                        <ul class="footer-social">
                            <li><a href="#"><img loading="lazy" width="75" height="150"
                                        src="<?php bloginfo('template_directory') ?>/html/common/images/ic-fb.svg"
                                        alt="facebook"></a></li>
                            <li><a href="#"><img loading="lazy" width="150" height="150"
                                        src="<?php bloginfo('template_directory') ?>/html/common/images/ic-inst.svg"
                                        alt="instagram"></a></li>
                            <li><a href="#"><img loading="lazy" width="214" height="150"
                                        src="<?php bloginfo('template_directory') ?>/html/common/images/ic-ytb.svg"
                                        alt="youtube"></a></li>
                            <li><a href="#"><img loading="lazy" width="150" height="150"
                                        src="<?php bloginfo('template_directory') ?>/html/common/images/ic-linkin.svg"
                                        alt="linkin"></a></li>
                            <li><a href="#"><img loading="lazy" width="150" height="150"
                                        src="<?php bloginfo('template_directory') ?>/html/common/images/ic-spotify.svg"
                                        alt="spotify"></a></li>
                            <li><a href="#"><img loading="lazy" width="150" height="150"
                                        src="<?php bloginfo('template_directory') ?>/html/common/images/ic-tiktok.svg"
                                        alt="tiktok"></a></li>
                        </ul>
                    </div>

                    <div class="footer-newsletter">
                        <h3>Đăng ký nhận bản tin hàng tuần</h3>
                        <form action="">
                            <input type="text" name="" id="" placeholder="Họ và tên*">
                            <input type="email" name="" id="" placeholder="Email*">
                            <p>Bạn có đang làm trong ngành Marketing & Communication không?*</p>
                            <label><input type="radio" name="newsletter-check" id=""><span class="indicator"></span>Có</label>
                            <label><input type="radio" name="newsletter-check" id=""><span
                                    class="indicator"></span>Không</label>
                            <p>Cách chúng tôi sử dụng <a href="#">thông tin của bạn</a></p>
                            <button>Gửi đăng ký</button>
                        </form>
                    </div>
                </div>

                <div class="copyright">
                    <small>
                        © Copyright AIM Academy 2021 <br class="sp-only">
                    </small>
                    <ul>
                        <li><a href="/term">Điều kiện & Điều khoản</a></li>
                        <li><a href="/privacy-policy">Chính sách bảo mật</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
    }
}