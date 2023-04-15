<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_event_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'event';
    }
    public function get_title()
    {
        return esc_html__('event', 'elementor-event-widget');
    }
    public function get_keywords()
    {
        return ['event'];
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // dd($settings['list_items']);
        ?>

        <!-- Page -->

        <main class="event-detail main main--without-kv">
            <div class="container">

                <ul class="tab tab--center event__menu">
                    <li class="tab__item">
                        <a class="tab__link tab__link--active" href="#">Sự kiện</a>
                    </li>
                    <li class="tab__item">
                        <a class="tab__link" href="#">Hình ảnh</a>
                    </li>
                </ul>
                <div class="event-detail__wrap">
                    <aside class="event-detail__sidebar">
                        <img class="pc-only" src="<?php bloginfo('template_directory') ?>/html/common/images/event/img-01.jpg"
                            alt="">
                        <img class="sp-only"
                            src="<?php bloginfo('template_directory') ?>/html/common/images/event/img-01-sp.jpg" alt="">
                        <div class="regis-box event-detail__regis">
                            <p class="regis-box__text">9:00 – 12:00, sáng thứ 7, 13.03.2021<br>Tại AIM Academy<br>Miễn phí tham
                                dự</p>
                            <a href="#" class="button button--full regis-box__button">
                                <span>ĐĂNG KÝ THAM GIA</span>
                            </a>
                        </div>
                    </aside>

                    <section class="event-detail__content">
                        <p class="event-detail__cat">
                            [SEMINAR]
                            <span class="event-detail__tag">SẮP DIỄN RA</span>
                        </p>
                        <h1 class="heading event-detail__heading">CHINH PHỤC TIKTOK - KHAI PHÁ NGUỒN KHÁCH HÀNG KHỔNG LỒ</h1>
                        <a href="#" class="button button--full event-detail__button">
                            <span>ĐĂNG KÝ THAM GIA</span>
                        </a>

                        <p class="event-detail__info">
                            Thời gian: 9:00 – 12:00, sáng thứ 7, 13.03.2021<br>
                            Địa điểm: AIM Academy, 146 bis Nguyễn Văn Thủ, phường Đakao, quận 1, HCM<br>
                            Miễn phí tham dự
                        </p>

                        <h2 class="event-detail__title event-detail__title--color">QUÀ TẶNG ĐẶC BIỆT</h2>
                        <div class="paragraph">
                            <p>Hỗ trợ tạo tài khoản quảng cáo TikTok miễn phí cho người tham dự</p>
                        </div>


                        <h2 class="event-detail__title">Diễn giả</h2>
                        <div class="paragraph">
                            <ul>
                                <li><strong>Anh Nguyễn Thế Huy</strong><span style="font-style: italic;">– CEO – TikPlus Vietnam
                                        (TikTok Official Agency Partner)</span></li>
                                <li><strong>Anh Phạm Duy Anh Dũng</strong><span style="font-style: italic;">– Trainer – Chương
                                        trình Bệ phóng Việt Nam Digital 4.0; SEM Marketing Manager – Tiki Corp</span></li>
                                <li><strong>Anh Maya Võ</strong><span style="font-style: italic;">– Digital Marketer & Content
                                        Creator; Marketing Director – Bambo; Founder – Mayashare.com</span></li>
                            </ul>
                        </div>


                        <div class="event-detail__body">
                            <h3 class="event-detail__title">NỘI DUNG SỰ KIỆN</h3>
                            <div class="paragraph">
                                <p>
                                    Bạn có thể không dùng TikTok, nhưng người nhà bạn dùng, đồng nghiệp bạn dùng, khách hàng bạn
                                    dùng. Làm sao để tiếp cận và khai phá nguồn khách hàng khổng lồ trên ứng dụng này đang là
                                    câu hỏi của bất kì người làm kinh doanh, marketing nào.
                                    SEMINAR “CHINH PHỤC TIKTOK – KHAI PHÁ NGUỒN KHÁCH HÀNG KHỔNG LỒ” tại AIM Academy tháng 3 sẽ
                                    giúp bạn tăng tốc trên đường đua này với những nội dung:
                                </p>
                                <ul>
                                    <li>
                                        Xu hướng tăng trưởng của TikTok – “miền đất hứa” với nguồn khách hàng tiềm năng
                                    </li>
                                    <li>
                                        Quảng cáo hiệu quả trên TikTok – những cập nhật mới nhất
                                    </li>
                                    <li>
                                        Xây dựng nội dung “thần sầu”, vừa hút like, vừa bán được hàng
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </section>
                </div>


            </div>
        </main>

        <?php
    }
}