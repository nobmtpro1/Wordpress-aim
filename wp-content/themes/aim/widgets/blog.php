<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_blog_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'blog';
    }
    public function get_title()
    {
        return esc_html__('blog', 'elementor-blog-widget');
    }
    public function get_keywords()
    {
        return ['blog'];
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // dd($settings['list_items']);
        ?>

        <!-- Page -->

        <main class="main main--without-kv blog">
            <div class="container">

                <!-- Menu -->
                <ul class="blog__menu">
                    <li class="blog__menu-item">
                        <a class="blog__menu-link blog__menu-link--active" href="#">All</a>
                    </li>
                    <li class="blog__menu-item">
                        <a class="blog__menu-link" href="#">Maketing Management</a>
                    </li>
                    <li class="blog__menu-item">
                        <a class="blog__menu-link" href="#">Creative/Content Development</a>
                    </li>
                    <li class="blog__menu-item">
                        <a class="blog__menu-link" href="#">Channel Optimization - Digital</a>
                    </li>
                    <li class="blog__menu-item">
                        <a class="blog__menu-link" href="#">Channel Optimization - Others</a>
                    </li>
                    <li class="blog__menu-item">
                        <a class="blog__menu-link" href="#">Soft Skills</a>
                    </li>
                </ul>

                <div class="blog__detail-heading">
                    <div class="blog__detail-info">
                        <p>01/03/2021</p>
                        <a href="#">
                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/arrow-gradient-left.svg"
                                alt="">
                            Trở về Channel Optimization - Digital
                        </a>
                    </div>
                    <h1 class="blog__detail-title">Tối ưu hóa chiến dịch digital mùa Tết về Creative và Media</h1>
                    <div class="blog__detail-social">Chia sẻ:
                        <a href="#"><img height="27"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/ic-fb-gray.svg" alt=""></a>
                        <a href="#"><img height="27"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/ic-inst-gray.svg" alt=""></a>
                        <a href="#"><img height="27"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/ic-linkin-gray.svg" alt=""></a>
                    </div>
                </div>

                <div class="blog__detail-body">
                    <div class="blog__detail-post">
                        <img class="blog__detail-image-feature"
                            src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">

                        <!-- update content -->

                        <ul class="blog__detail-anchor">
                            <li>
                                <a href="#">CREATIVE HAY MEDIA QUAN TRỌNG HƠN?</a>
                            </li>
                            <li>
                                <a href="#">TỐI ƯU CREATIVE (NỘI DUNG SÁNG TẠO)</a>
                                <ul>
                                    <li><a href="#">Những loại nội dung được quan tâm nhất trong mùa tết</a></li>
                                    <li><a href="#">Top quảng cáo tết thành công nhờ đánh trúng insight</a></li>
                                    <li><a href="#">Tối ưu material như thế nào?</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">TỐI ƯU MEDIA</a>
                                <ul>
                                    <li><a href="#">Tiếp cận đối tượng khách hàng quan trọng</a></li>
                                </ul>
                            </li>
                        </ul>

                        <p class="blog__detail-intro">
                            Chiến dịch Tết luôn là “hố đen” tiêu tiền của mọi thương hiệu. Tiêu tốn nhiều chi phí là thế nhưng
                            không phải cứ đánh là đã thắng. Làm sao để tối ưu hóa chiến dịch mùa Tết năm 2021 của bạn, cả về Nội
                            dung (Creative) lẫn Kênh truyền thông (Media)? Dưới đây là một số kinh nghiệm đúc kết từ các chiến
                            dịch nổi bật Tết 2020 cùng những xu hướng mới nhất của 2021.
                        </p>


                        <!-- SAMPLE CONTENT -->
                        <div class="blog__detail-mainContent">
                            <h2>REATIVE HAY MEDIA QUAN TRỌNG HƠN?</h2>
                            <h3>NHỮNG LOẠI NỘI DUNG ĐƯỢC QUAN TÂM NHẤT TRONG MÙA TẾT</h3>
                            <strong>∙ Music Video (Phim ca nhạc)</strong>
                            <img class="blog__detail-image-feature"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus illum eius suscipit
                                consequuntur hic, tempora, quisquam necessitatibus unde aspernatur neque ab fuga consectetur
                                recusandae molestias iste a nulla. Molestias, magni!
                            </p>

                            <div class="blog__detail-related-course-mobile">
                                <section class="interested-course-blog">
                                    <h2 class="interested-course-blog__heading">KHOÁ HỌC LIÊN QUAN</h2>

                                    <ul class="interested-course-blog__list">

                                        <li class="interested-course-blog__item">
                                            <article class="interested-course-blog__article">
                                                <div class="interested-course-blog__article-image">
                                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/for-individual/img.png"
                                                        alt="">
                                                </div>
                                                <div class="interested-course-blog__article-body">
                                                    <a href="#">
                                                        <h3 class="interested-course-blog__article-title">DIGITAL PLATFORM
                                                            MANAGEMENT</h3>
                                                        <table class="interested-course-blog__article-info">
                                                            <tr>
                                                                <td>Khai giảng</td>
                                                                <td>: 04/03/2021</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thời lượng</td>
                                                                <td>: 8 BUỔI</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thời gian</td>
                                                                <td>: Thứ 3-5(19:30 -21:00) & Thứ 7(19:30 -21:00)</td>
                                                            </tr>
                                                        </table>
                                                    </a>

                                                </div>
                                            </article>
                                            <a href="#" class="button button--border interested-course-blog__article-button">
                                                <span>ĐĂNG KÝ NGAY</span>
                                                <img src="/common//images/arrow-gradient.svg" alt="">
                                            </a>
                                        </li>

                                        <li class="interested-course-blog__item">
                                            <article class="interested-course-blog__article">
                                                <div class="interested-course-blog__article-image">
                                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/for-individual/img.png"
                                                        alt="">
                                                </div>
                                                <div class="interested-course-blog__article-body">
                                                    <a href="#">
                                                        <h3 class="interested-course-blog__article-title">DIGITAL PLATFORM
                                                            MANAGEMENT</h3>
                                                        <table class="interested-course-blog__article-info">
                                                            <tr>
                                                                <td>Khai giảng</td>
                                                                <td>: 04/03/2021</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thời lượng</td>
                                                                <td>: 8 BUỔI</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thời gian</td>
                                                                <td>: Thứ 3-5(19:30 -21:00) & Thứ 7(19:30 -21:00)</td>
                                                            </tr>
                                                        </table>
                                                    </a>

                                                </div>
                                            </article>
                                            <a href="#" class="button button--border interested-course-blog__article-button">
                                                <span>ĐĂNG KÝ NGAY</span>
                                                <img src="/common//images/arrow-gradient.svg" alt="">
                                            </a>
                                        </li>

                                    </ul>

                                    <a class=" button button--full interested-course-blog__button" href="#">XEM THÊM</a>
                                </section>
                                <p class="continue-reading"><span>Tiếp tục đọc bài viết</span></p>
                            </div>

                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus illum eius suscipit
                                consequuntur hic, tempora, quisquam necessitatibus unde aspernatur neque ab fuga consectetur
                                recusandae molestias iste a nulla. Molestias, magni!
                            </p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/VVSgYrtwxjg"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>

                        <!-- END SAMPLE CONTENT -->


                    </div>

                    <div class="blog__detail-sidebar">
                        <section class="interested-course">
                            <h2 class="interested-course__heading">CÁC KHÓA HỌC CÓ THỂ <br>BẠN QUAN TÂM</h2>

                            <ul class="interested-course__list">

                                <li class="interested-course__item">
                                    <article class="interested-course__article interested-course__article--hot">
                                        <div class="interested-course__article-image">
                                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/for-individual/img.png"
                                                alt="">
                                        </div>
                                        <div class="interested-course__article-body">
                                            <h3 class="interested-course__article-title">DIGITAL PLATFORM MANAGEMENT</h3>
                                            <p class="interested-course__article-info">
                                                <span>04/03/2021</span>
                                                <span>8 BUỔI</span>
                                                <span>Thứ 3-5-7</span>
                                            </p>
                                            <a href="#" class="button button--border interested-course__article-button">
                                                <span>ĐĂNG KÝ</span>
                                            </a>
                                        </div>
                                    </article>
                                </li>

                                <li class="interested-course__item">
                                    <article class="interested-course__article">
                                        <div class="interested-course__article-image">
                                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/for-individual/img.png"
                                                alt="">
                                        </div>
                                        <div class="interested-course__article-body">
                                            <h3 class="interested-course__article-title">DIGITAL PLATFORM MANAGEMENT</h3>
                                            <p class="interested-course__article-info">
                                                <span>04/03/2021</span>
                                                <span>8 BUỔI</span>
                                                <span>Thứ 3-5-7</span>
                                            </p>
                                            <a href="#" class="button button--border interested-course__article-button">
                                                <span>ĐĂNG KÝ</span>
                                            </a>
                                        </div>
                                    </article>
                                </li>

                                <li class="interested-course__item">
                                    <article class="interested-course__article">
                                        <div class="interested-course__article-image">
                                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/for-individual/img.png"
                                                alt="">
                                        </div>
                                        <div class="interested-course__article-body">
                                            <h3 class="interested-course__article-title">DIGITAL PLATFORM MANAGEMENT</h3>
                                            <p class="interested-course__article-info">
                                                <span>04/03/2021</span>
                                                <span>8 BUỔI</span>
                                                <span>Thứ 3-5-7</span>
                                            </p>
                                            <a href="#" class="button button--border interested-course__article-button">
                                                <span>ĐĂNG KÝ</span>
                                            </a>
                                        </div>
                                    </article>
                                </li>

                            </ul>

                            <a class="interested-course__button" href="#">Xem tất cả khóa học</a>
                        </section>
                        <section class="related-post">
                            <h2 class="related-post__heading">BÀI VIẾT LIÊN QUAN</h2>
                            <ul class="related-post__list">
                                <li class="related-post__item">
                                    <a class="related-post__card" href="#">
                                        <p class="related-post__topic">Channel Optimization - Digital</p>
                                        <h3 class="related-post__title">Data-Driven Marketing là gì? Tầm quan trọng của data với
                                            các quyết định kinh doanh</h3>
                                    </a>
                                </li>
                                <li class="related-post__item">
                                    <a class="related-post__card" href="#">
                                        <p class="related-post__topic">Channel Optimization - Digital</p>
                                        <h3 class="related-post__title">6 lỗi sai cơ bản trong quảng cáo Facebook khiến bạn
                                            hoang phí ngân sách</h3>
                                    </a>
                                </li>
                                <li class="related-post__item">
                                    <a class="related-post__card" href="#">
                                        <p class="related-post__topic">Channel Optimization - Digital</p>
                                        <h3 class="related-post__title">Các định dạng quảng cáo Youtube và 6 phương pháp tạo
                                            quảng cáo hiệu quả</h3>
                                    </a>
                                </li>
                                <li class="related-post__item">
                                    <a class="related-post__card" href="#">
                                        <p class="related-post__topic">Channel Optimization - Digital</p>
                                        <h3 class="related-post__title">Bạn nghiện Netflix như thế nào? Bí quyết tận dụng A/B
                                            Testing và cá nhân hóa trải nghiệm người dùng</h3>
                                    </a>
                                </li>
                                <li class="related-post__item">
                                    <a class="related-post__card" href="#">
                                        <p class="related-post__topic">Channel Optimization - Digital</p>
                                        <h3 class="related-post__title">Bạn nghiện Netflix như thế nào? Bí quyết tận dụng A/B
                                            Testing và cá nhân hóa trải nghiệm người dùng</h3>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>

            </div>
        </main>
        <section class="advisor">
            <div class="container advisor__inner">
                <h3 class="advisor__heading">Bạn đang theo đuổi nghề Marketing<br>và muốn tìm hiểu về các khóa học<br>tại AIM
                    Academy?</h3>
                <a href="#" class="button button--full advisor__button">
                    <span>TƯ VẤN MIỄN PHÍ</span>
                </a>
            </div>
        </section>

        <?php
    }
}