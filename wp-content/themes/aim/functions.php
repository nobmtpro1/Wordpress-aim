<?php

add_filter('plugin_action_links', 'disable_plugin_deactivation', 10, 4);
function disable_plugin_deactivation($actions, $plugin_file, $plugin_data, $context)
{
    if (
        array_key_exists('deactivate', $actions) && in_array(
            $plugin_file,
            array(
                'elementor/elementor.php',
                'pro-elements/pro-elements.php',
                'pods/init.php',
                'wp-mail-smtp/wp_mail_smtp.php',
            )
        )
    )
        unset($actions['deactivate']);
    return $actions;
}
function register_menus()
{
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu'
        )
    );
}
add_action('init', 'register_menus');


function add_styles()
{
    ?>
    <script>
        const styles = document.querySelectorAll('link[id*="elementor"]')
        console.log(styles);
        styles?.forEach(e => {
            e?.remove();
        });
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.0/swiper-bundle.min.css"
        integrity="sha512-T9Nrm9JU37BvYFgjYGVYc8EGnpd3nPDz/NY19X6gsNjb0VHorik8KDBljLHvqWdqz9igNqTBvZY4oCJQer4Xtg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/html/common/css/common.min.css">

    <?php
}
add_action('wp_head', 'add_styles', 999999999);

add_action('elementor/frontend/after_register_scripts', function () {
    wp_register_script('script-1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_register_script('script-2', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.0/swiper-bundle.min.js');
    wp_register_script('script-3', get_template_directory_uri() . '/html/common/js/modal.js');
    wp_register_script('script-4', get_template_directory_uri() . '/html/common/js/common.min.js');

    wp_enqueue_script('script-1', 'script-1', [], '', true);
    wp_enqueue_script('script-2', 'script-2', [], '', true);
    wp_enqueue_script('script-3', 'script-3', [], '', true);
    wp_enqueue_script('script-4', 'script-4', [], '', true);
});

function register_elementor_widgets($widgets_manager)
{
    require_once(__DIR__ . '/widgets/header.php');
    require_once(__DIR__ . '/widgets/footer.php');
    require_once(__DIR__ . '/widgets/home.php');
    require_once(__DIR__ . '/widgets/blogs.php');
    require_once(__DIR__ . '/widgets/competition_and_awards.php');
    require_once(__DIR__ . '/widgets/job_matching.php');
    require_once(__DIR__ . '/widgets/events.php');
    require_once(__DIR__ . '/widgets/images.php');
    require_once(__DIR__ . '/widgets/event.php');
    require_once(__DIR__ . '/widgets/blog.php');
    require_once(__DIR__ . '/widgets/mentors.php');

    $widgets_manager->register(new \Elementor_header_Widget());
    $widgets_manager->register(new \Elementor_footer_Widget());
    $widgets_manager->register(new \Elementor_home_Widget());
    $widgets_manager->register(new \Elementor_blogs_Widget());
    $widgets_manager->register(new \Elementor_competition_and_awards_Widget());
    $widgets_manager->register(new \Elementor_job_matching_Widget());
    $widgets_manager->register(new \Elementor_events_Widget());
    $widgets_manager->register(new \Elementor_images_Widget());
    $widgets_manager->register(new \Elementor_event_Widget());
    $widgets_manager->register(new \Elementor_blog_Widget());
    $widgets_manager->register(new \Elementor_mentors_Widget());
}
add_action('elementor/widgets/register', 'register_elementor_widgets');