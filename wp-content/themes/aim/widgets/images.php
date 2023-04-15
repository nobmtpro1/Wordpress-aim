<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_images_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'images';
    }
    public function get_title()
    {
        return esc_html__('images', 'elementor-images-widget');
    }
    public function get_keywords()
    {
        return ['images'];
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        global $post;
        $categories = get_terms(
            array(
                'taxonomy' => 'image_category',
                'hide_empty' => false,
            )
        );
        $page = @sanitize_post($GLOBALS['wp_the_query']->get_queried_object());
        global $wp_query;
        $posts = $wp_query->posts;
        // dd($posts);
        ?>

        <!-- Page -->

        <main class="gallery main main--without-kv">
            <div class="container">

                <ul class="tab tab--center gallery__menu">
                    <li class="tab__item">
                        <a class="tab__link" href="#">Sự kiện</a>
                    </li>
                    <li class="tab__item">
                        <a class="tab__link tab__link--active" href="#">Hình ảnh</a>
                    </li>
                </ul>
                <!-- Slider main container -->
                <div class="swiper-container gallery__swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img loading="lazy" width="1430" height="547"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-gallery-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="1430" height="547"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-gallery-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="1430" height="547"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-gallery-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="1430" height="547"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-gallery-img.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img loading="lazy" width="1430" height="547"
                                src="<?php bloginfo('template_directory') ?>/html/common/images/kv/kv-gallery-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <ul class="tab gallery__tab">
                    <?php foreach ($categories as $category): ?>
                        <li class="tab__item">
                            <a class="tab__link <?= $page->slug == $category->slug ? 'tab__link--active' : '' ?> "
                                href="<?= get_term_link($category) ?>"><?= $category->name ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <ul class="gallery__list">
                    <?php foreach ($posts as $p): ?>
                        <li class="gallery__item">
                            <figure class="gallery__card">
                                <img src="<?php bloginfo('template_directory') ?>/html/common/images/gallery/img-01.jpg"
                                    width="2048" height="1365" loading="lazy" alt="" />
                                <div class="gallery__card-body">
                                    <h3 class="gallery__title">
                                        <?= $p->post_title ?>
                                    </h3>
                                    <p class="gallery__date">16/01/2021</p>
                                    <div class="gallery__card-footer">
                                        <a href="<?= get_permalink($p) ?>" class="button button--border gallery__button">
                                            <span>Xem thêm</span>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </li>
                    <?php endforeach ?>

                    <li class="gallery__item">
                        <figure class="gallery__card">
                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/gallery/img-01.jpg"
                                width="2048" height="1365" loading="lazy" alt="" />
                            <div class="gallery__card-body">
                                <h3 class="gallery__title">Seminar Livestream Commerce - Chìa Khóa Vàng Cho 2021</h3>
                                <p class="gallery__date">16/01/2021</p>
                                <div class="gallery__card-footer">
                                    <a href="#" class="button button--border gallery__button">
                                        <span>Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                        </figure>
                    </li>
                    <li class="gallery__item">
                        <figure class="gallery__card">
                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/gallery/img-01.jpg"
                                width="2048" height="1365" loading="lazy" alt="" />
                            <div class="gallery__card-body">
                                <h3 class="gallery__title">Seminar Livestream Commerce - Chìa Khóa Vàng Cho 2021</h3>
                                <p class="gallery__date">16/01/2021</p>
                                <div class="gallery__card-footer">
                                    <a href="#" class="button button--border gallery__button">
                                        <span>Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                        </figure>
                    </li>
                    <li class="gallery__item">
                        <figure class="gallery__card">
                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/gallery/img-01.jpg"
                                width="2048" height="1365" loading="lazy" alt="" />
                            <div class="gallery__card-body">
                                <h3 class="gallery__title">Seminar Livestream Commerce - Chìa Khóa Vàng Cho 2021</h3>
                                <p class="gallery__date">16/01/2021</p>
                                <div class="gallery__card-footer">
                                    <a href="#" class="button button--border gallery__button">
                                        <span>Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                        </figure>
                    </li>
                    <li class="gallery__item">
                        <figure class="gallery__card">
                            <img src="<?php bloginfo('template_directory') ?>/html/common/images/gallery/img-01.jpg"
                                width="2048" height="1365" loading="lazy" alt="" />
                            <div class="gallery__card-body">
                                <h3 class="gallery__title">Seminar Livestream Commerce - Chìa Khóa Vàng Cho 2021</h3>
                                <p class="gallery__date">16/01/2021</p>
                                <div class="gallery__card-footer">
                                    <a href="#" class="button button--border gallery__button">
                                        <span>Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                        </figure>
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


        <?php
    }
}