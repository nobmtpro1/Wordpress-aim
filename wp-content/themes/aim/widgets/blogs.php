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
class Elementor_blogs_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'blogs';
    }
    public function get_title()
    {
        return esc_html__('blogs', 'elementor-blogs-widget');
    }
    public function get_keywords()
    {
        return ['blogs'];
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        global $post;
        $categories = get_terms(
            array(
                'taxonomy' => 'category',
                'hide_empty' => false,
            )
        );
        $page = @sanitize_post($GLOBALS['wp_the_query']->get_queried_object());
        // dd($page);
        ?>

        <!-- Page -->

        <main class="main main--without-kv blog">
            <div class="container">

                <!-- Menu -->
                <ul class="blog__menu">
                    <?php foreach ($categories as $category): ?>
                        <li class="blog__menu-item">
                            <a class="blog__menu-link <?= $page->slug == $category->slug ? 'blog__menu-link--active' : '' ?> "
                                href="<?= get_term_link($category) ?>"><?= $category->name ?></a>
                        </li>
                    <?php endforeach ?>

                </ul>

                <!-- Toolbar -->
                <div class="form ">
                    <div class="blog-sort sp-only">
                        <select class="form-control--sort">
                            <option value="" selected disabled hidden>Tất cả chủ đề</option>
                            <option>All</option>
                            <option>Maketing Management</option>
                            <option>Creative/Content Development</option>
                            <option>Channel Optimization - Digital</option>
                            <option>Channel Optimization - Others</option>
                            <option>Soft Skills</option>
                        </select>
                    </div>
                    <div class="blog-time">
                        <select class="form-control--sort">
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                        </select>
                    </div>
                </div>


                <!-- Top section -->
                <div class="pc-only blog__top">
                    <div class="blog__top-feature">
                        <article href="#" class="blog-card
          
           blog-card--big
          ">
                            <div href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Creative/Content Development</p>
                                    <h3 class="blog-card__title">6 bước quản lý và vận hành gian hàng hiệu quả trên sàn thương
                                        mại điện tử</h3>
                                    <a class="viewmore" href="#">Đọc thêm <img
                                            src="<?php bloginfo('template_directory') ?>/html/common/images/arrow-gradient-green.svg"
                                            alt=""></a>
                                </div>
                            </div>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </div>
                    <ul class="blog__top-aside">
                        <li class="blog__top-aside-item">
                            <article href="#" class="blog-card blog-card--small">
                                <a href="#" class="blog-card__article">
                                    <div class="blog-card__image">
                                        <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg"
                                            alt="">
                                    </div>
                                    <div class="blog-card__body">
                                        <p class="blog-card__topic">Creative/Content Development</p>
                                        <h3 class="blog-card__title">6 bước quản lý và vận hành gian hàng hiệu quả trên sàn
                                            thương mại điện tử</h3>
                                    </div>
                                </a>
                                <a href="#" class="button button--full blog-card__button">
                                    <span>Đọc thêm</span>
                                </a>
                            </article>
                        </li>
                        <li class="blog__top-aside-item">
                            <article href="#" class="blog-card
            
            
             blog-card--small">
                                <a href="#" class="blog-card__article">
                                    <div class="blog-card__image">
                                        <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg"
                                            alt="">
                                    </div>
                                    <div class="blog-card__body">
                                        <p class="blog-card__topic">Marketing Management</p>
                                        <h3 class="blog-card__title">Thương mại điện tử là gì? Phân biệt website và sàn giao
                                            dịch thương mại điện tử</h3>
                                    </div>
                                </a>
                                <a href="#" class="button button--full blog-card__button">
                                    <span>Đọc thêm</span>
                                </a>
                            </article>
                        </li>
                        <li class="blog__top-aside-item">
                            <article href="#" class="blog-card
            
            
             blog-card--small">
                                <a href="#" class="blog-card__article">
                                    <div class="blog-card__image">
                                        <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg"
                                            alt="">
                                    </div>
                                    <div class="blog-card__body">
                                        <p class="blog-card__topic">Channel Optimization - Digital</p>
                                        <h3 class="blog-card__title">Insight là gì?<br>3 cách định nghĩa về insight</h3>
                                    </div>
                                </a>
                                <a href="#" class="button button--full blog-card__button">
                                    <span>Đọc thêm</span>
                                </a>
                            </article>
                        </li>
                        <li class="blog__top-aside-item">
                            <article href="#" class="blog-card
            
            
             blog-card--small">
                                <a href="#" class="blog-card__article">
                                    <div class="blog-card__image">
                                        <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg"
                                            alt="">
                                    </div>
                                    <div class="blog-card__body">
                                        <p class="blog-card__topic">Marketing Management</p>
                                        <h3 class="blog-card__title">5 quảng cáo Giáng Sinh ấn tượng và ý nghĩa nhất năm 2020
                                        </h3>
                                    </div>
                                </a>
                                <a href="#" class="button button--full blog-card__button">
                                    <span>Đọc thêm</span>
                                </a>
                            </article>
                        </li>
                        <li class="blog__top-aside-item">
                            <article href="#" class="blog-card
            
            
             blog-card--small">
                                <a href="#" class="blog-card__article">
                                    <div class="blog-card__image">
                                        <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg"
                                            alt="">
                                    </div>
                                    <div class="blog-card__body">
                                        <p class="blog-card__topic">Creative/Content Development</p>
                                        <h3 class="blog-card__title">6 bước quản lý và vận hành gian hàng hiệu quả trên sàn
                                            thương mại điện tử</h3>
                                    </div>
                                </a>
                                <a href="#" class="button button--full blog-card__button">
                                    <span>Đọc thêm</span>
                                </a>
                            </article>
                        </li>
                    </ul>
                </div>

                <!-- List section -->
                <ul class="blog__list">
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Creative/Content Development</p>
                                    <h3 class="blog-card__title">6 bước quản lý và vận hành gian hàng hiệu quả trên sàn thương
                                        mại điện tử</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </li>
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Marketing Management</p>
                                    <h3 class="blog-card__title">Thương mại điện tử là gì? Phân biệt website và sàn giao dịch
                                        thương mại điện tử</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </li>
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Channel Optimization - Digital</p>
                                    <h3 class="blog-card__title">Insight là gì?<br>3 cách định nghĩa về insight</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </li>
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Marketing Management</p>
                                    <h3 class="blog-card__title">5 quảng cáo Giáng Sinh ấn tượng và ý nghĩa nhất năm 2020</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </li>
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Marketing Management</p>
                                    <h3 class="blog-card__title">6 bước quản lý và vận hành gian hàng hiệu quả trên sàn thương
                                        mại điện tử</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </li>
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Marketing Management</p>
                                    <h3 class="blog-card__title">Thương mại điện tử là gì? Phân biệt website và sàn giao dịch
                                        thương mại điện tử</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </li>
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Marketing Management</p>
                                    <h3 class="blog-card__title">Insight là gì?<br>3 cách định nghĩa về insight</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </li>
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Marketing Management</p>
                                    <h3 class="blog-card__title">5 quảng cáo Giáng Sinh ấn tượng và ý nghĩa nhất năm 2020</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </li>
                    <li class="blog__item">
                        <article href="#" class="blog-card
             blog-card--gray
            
            ">
                            <a href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?php bloginfo('template_directory') ?>/html/common/images/blog/img.jpg" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">Marketing Management</p>
                                    <h3 class="blog-card__title">5 quảng cáo Giáng Sinh ấn tượng và ý nghĩa nhất năm 2020</h3>
                                </div>
                            </a>
                            <a href="#" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
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