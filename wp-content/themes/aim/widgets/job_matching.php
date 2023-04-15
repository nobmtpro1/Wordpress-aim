<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_job_matching_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'job_matching';
    }
    public function get_title()
    {
        return esc_html__('job_matching', 'elementor-job_matching-widget');
    }
    public function get_keywords()
    {
        return ['job_matching'];
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // dd($settings['list_items']);
        ?>

        <!-- Page -->
        <section class="kv kv-thankyou kv-matching">
            <div class="container kv__inner">
                <h1 class="kv__title">
                    KẾT NỐI TUYỂN DỤNG
                </h1>
                <p class="kv__subtitle">(Dịch vụ sắp ra mắt)
                    <br />&SmallCircle;&SmallCircle;&SmallCircle;
                </p>
                <p class="kv__text">Bạn hãy tiếp tục theo dõi <br />AIM Academy để biết thêm thông tin nhé.</p>
            </div>
        </section>

        <?php
    }
}