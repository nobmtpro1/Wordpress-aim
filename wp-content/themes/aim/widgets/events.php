<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_events_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'events';
    }
    public function get_title()
    {
        return esc_html__('events', 'elementor-events-widget');
    }
    public function get_keywords()
    {
        return ['events'];
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // dd($settings['list_items']);
        ?>

        <!-- Page -->

        <main class="event main main--without-kv">
            <div class="container">

                <ul class="tab tab--center event__menu">
                    <li class="tab__item">
                        <a class="tab__link tab__link--active" href="#">Sự kiện</a>
                    </li>
                    <li class="tab__item">
                        <a class="tab__link" href="#">Hình ảnh</a>
                    </li>
                </ul>
                <!-- Slider main container -->
                <div class="swiper-container event__swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img loading="lazy" width="1920" height="1080"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-event-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="1920" height="1080"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-event-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="1920" height="1080"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-event-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="1920" height="1080"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-event-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="1920" height="1080"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-event-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="box">
                    <h2 class="heading">
                        SỰ KIỆN
                    </h2>
                    <p class="box__text">
                        <span class='pc-only'>Với mong muốn trở thành cầu nối về nhân sự trong thị trường việc làm đầy biến động
                            của ngành<br class='pc-only'> Maketing & Communication. AIM liên tục có các sự kiện kết nối nhà
                            tuyển dụng và sinh viên<br class='pc-only'>cũng như các sự kiện giúp học viên hiểu rõ các phân ngành
                            nhỏ của Marketing</span>
                        <span class='sp-only'>AIM Academy liên tục tổ chức các sự kiện<br> networking, định hướng nghề nghiệp
                            cũng như<br>chia sẻ những xu hướng mới nhất trong ngành.</span>
                    </p>
                </div>
                <ul class="event__list">
                    <li class="event__item">
                        <article class="event__card">
                            <a class="event__body" href="/event-detail.html">
                                <p class="event__cat">
                                    [SEMINAR]
                                    <span class="event__tag">SẮP DIỄN RA</span>
                                </p>
                                <h3 class="event__title">chinh phục tiktok - khai phá nguồn khách hàng khổng lồ</h3>
                                <p class="event__date">Thứ 7, Ngày 13/03/2021 <span class="pc-only">|</span><br class="sp-only">
                                    9am-12pm
                                    <br> Tại AIM Academy
                                </p>
                            </a>
                            <div class="event__image">
                                <img src="<?php bloginfo('template_directory') ?>/html/common/images/event/img-01.jpg"
                                    width="1000" height="1493" loading="lazy" alt="" />
                                <div class="event__button-group">
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Xem chi tiết</span>
                                    </a>
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Đăng ký tham gia</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="event__item">
                        <article class="event__card">
                            <a class="event__body" href="/event-detail.html">
                                <p class="event__cat">
                                    [SEMINAR]
                                </p>
                                <h3 class="event__title">chinh phục tiktok - khai phá nguồn khách hàng khổng lồ</h3>
                                <p class="event__date">Thứ 7, Ngày 13/03/2021 <span class="pc-only">|</span><br class="sp-only">
                                    9am-12pm
                                    <br> Tại AIM Academy
                                </p>
                            </a>
                            <div class="event__image">
                                <img src="<?php bloginfo('template_directory') ?>/html/common/images/event/img-01.jpg"
                                    width="1000" height="1493" loading="lazy" alt="" />
                                <div class="event__button-group">
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Xem chi tiết</span>
                                    </a>
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Đăng ký tham gia</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="event__item">
                        <article class="event__card">
                            <a class="event__body" href="/event-detail.html">
                                <p class="event__cat">
                                    [SEMINAR]
                                </p>
                                <h3 class="event__title">chinh phục tiktok - khai phá nguồn khách hàng khổng lồ</h3>
                                <p class="event__date">Thứ 7, Ngày 13/03/2021 <span class="pc-only">|</span><br class="sp-only">
                                    9am-12pm
                                    <br> Tại AIM Academy
                                </p>
                            </a>
                            <div class="event__image">
                                <img src="<?php bloginfo('template_directory') ?>/html/common/images/event/img-01.jpg"
                                    width="1000" height="1493" loading="lazy" alt="" />
                                <div class="event__button-group">
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Xem chi tiết</span>
                                    </a>
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Đăng ký tham gia</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="event__item">
                        <article class="event__card">
                            <a class="event__body" href="/event-detail.html">
                                <p class="event__cat">
                                    [SEMINAR]
                                </p>
                                <h3 class="event__title">chinh phục tiktok - khai phá nguồn khách hàng khổng lồ</h3>
                                <p class="event__date">Thứ 7, Ngày 13/03/2021 <span class="pc-only">|</span><br class="sp-only">
                                    9am-12pm
                                    <br> Tại AIM Academy
                                </p>
                            </a>
                            <div class="event__image">
                                <img src="<?php bloginfo('template_directory') ?>/html/common/images/event/img-01.jpg"
                                    width="1000" height="1493" loading="lazy" alt="" />
                                <div class="event__button-group">
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Xem chi tiết</span>
                                    </a>
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Đăng ký tham gia</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="event__item">
                        <article class="event__card">
                            <a class="event__body" href="/event-detail.html">
                                <p class="event__cat">
                                    [SEMINAR]
                                </p>
                                <h3 class="event__title">chinh phục tiktok - khai phá nguồn khách hàng khổng lồ</h3>
                                <p class="event__date">Thứ 7, Ngày 13/03/2021 <span class="pc-only">|</span><br class="sp-only">
                                    9am-12pm
                                    <br> Tại AIM Academy
                                </p>
                            </a>
                            <div class="event__image">
                                <img src="<?php bloginfo('template_directory') ?>/html/common/images/event/img-01.jpg"
                                    width="1000" height="1493" loading="lazy" alt="" />
                                <div class="event__button-group">
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Xem chi tiết</span>
                                    </a>
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Đăng ký tham gia</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="event__item">
                        <article class="event__card">
                            <a class="event__body" href="/event-detail.html">
                                <p class="event__cat">
                                    [SEMINAR]
                                </p>
                                <h3 class="event__title">chinh phục tiktok - khai phá nguồn khách hàng khổng lồ</h3>
                                <p class="event__date">Thứ 7, Ngày 13/03/2021 <span class="pc-only">|</span><br class="sp-only">
                                    9am-12pm
                                    <br> Tại AIM Academy
                                </p>
                            </a>
                            <div class="event__image">
                                <img src="<?php bloginfo('template_directory') ?>/html/common/images/event/img-01.jpg"
                                    width="1000" height="1493" loading="lazy" alt="" />
                                <div class="event__button-group">
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Xem chi tiết</span>
                                    </a>
                                    <a href="#" class="button button--transparent event__button">
                                        <span>Đăng ký tham gia</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
                <div class="pagination">
                    <ul class="pagination__list">
                        <li class="pagination__item"><a
                                class="pagination__link pagination__link--prev pagination__link--disable" href="#"></a></li>
                        <li class="pagination__item"><a class="pagination__link pagination__link--active" href="#">1</a></li>
                        <li class="pagination__item"><a class="pagination__link" href="#">2</a></li>
                        <li class="pagination__item"><a class="pagination__link" href="#">3</a></li>
                        <li class="pagination__item"><a class="pagination__link" href="#">4</a></li>
                        <li class="pagination__item"><a class="pagination__link" href="#">5</a></li>
                        <li class="pagination__item"><a class="pagination__link" href="#">6</a></li>
                        <li class="pagination__item"><a class="pagination__link pagination__link--next" href="#"></a></li>
                    </ul>
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