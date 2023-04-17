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
        $term_slug = get_query_var('term');
        $paged = intval(@$_GET['paginate']) ?? 1;
        $posts = new WP_Query([
            'posts_per_page' => 9,
            'post_type' => 'post',
            'paged' => $paged,
            'orderby'   => 'ID',
            'order' => 'DESC',
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

        <main class="main main--without-kv blog">
            <div class="container">

                <!-- Menu -->
                <ul class="blog__menu">
                    <?php foreach ($categories as $category) : ?>
                        <li class="blog__menu-item">
                            <a class="blog__menu-link <?= $page->slug == $category->slug ? 'blog__menu-link--active' : '' ?> " href="<?= get_term_link($category) ?>"><?= $category->name ?></a>
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
                        <article href="#" class="blog-card blog-card--big">
                            <div href="#" class="blog-card__article">
                                <div class="blog-card__image">
                                    <img src="<?= @get_the_post_thumbnail_url(@$posts->posts[0]->ID) ?>" alt="">
                                </div>
                                <div class="blog-card__body">
                                    <p class="blog-card__topic">
                                        <?= @get_the_category(@$posts->posts[0]->ID)[0]->cat_name  ?>
                                    </p>
                                    <h3 class="blog-card__title">
                                        <?= @$posts->posts[0]->post_title ?>
                                    </h3>
                                    <a class="viewmore" href="<?= get_permalink(@$posts->posts[0]) ?>">Đọc thêm <img src="<?php bloginfo('template_directory') ?>/html/common/images/arrow-gradient-green.svg" alt=""></a>
                                </div>
                            </div>
                            <a href="<?= get_permalink(@$posts->posts[0]) ?>" class="button button--full blog-card__button">
                                <span>Đọc thêm</span>
                            </a>
                        </article>
                    </div>
                    <ul class="blog__top-aside">
                        <?php $i = 0; ?>
                        <?php foreach ($posts->posts as $p) : ?>
                            <?php
                            $i++;
                            if ($i < 2 || $i > 6) {
                                continue;
                            }
                            ?>
                            <li class="blog__top-aside-item">
                                <article href="<?= get_permalink(@$p) ?>" class="blog-card blog-card--small">
                                    <a href="#" class="blog-card__article">
                                        <div class="blog-card__image">
                                            <img src="<?= @get_the_post_thumbnail_url(@$p->ID) ?>" alt="">
                                        </div>
                                        <div class="blog-card__body">
                                            <p class="blog-card__topic"><?= @get_the_category(@$p->ID)[0]->cat_name  ?></p>
                                            <h3 class="blog-card__title"><?= @$p->post_title ?></h3>
                                        </div>
                                    </a>
                                    <a href="<?= get_permalink(@$p) ?>" class="button button--full blog-card__button">
                                        <span>Đọc thêm</span>
                                    </a>
                                </article>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- List section -->
                <ul class="blog__list">
                    <?php $i = 0; ?>
                    <?php foreach ($posts->posts as $p) : ?>
                        <?php
                        $i++;
                        if ($i < 7) {
                            continue;
                        }
                        ?>
                        <li class="blog__item">
                            <article href="<?= get_permalink(@$p) ?>" class="blog-card blog-card--gray">
                                <a href="<?= get_permalink(@$p) ?>" class="blog-card__article">
                                    <div class="blog-card__image">
                                        <img src="<?= @get_the_post_thumbnail_url(@$p->ID) ?>" alt="">
                                    </div>
                                    <div class="blog-card__body">
                                        <p class="blog-card__topic"><?= @get_the_category(@$p->ID)[0]->cat_name  ?></p>
                                        <h3 class="blog-card__title"><?= @$p->post_title ?></h3>
                                    </div>
                                </a>
                                <a href="<?= get_permalink(@$p) ?>" class="button button--full blog-card__button">
                                    <span>Đọc thêm</span>
                                </a>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="pagination">
                    <ul class="pagination__list" id="pagination">
                        <?php
                        $links = paginate_links([
                            'total' => $posts->max_num_pages,
                            'current' => max(1, intval(@$_GET['paginate']) ?? 1),
                            'prev_text' => __('<'),
                            'next_text' => __('>'),
                            'type' => 'array',
                            'format' => '?paginate=%#%',
                        ]);
                        foreach ($links ?? [] as $link) :
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
