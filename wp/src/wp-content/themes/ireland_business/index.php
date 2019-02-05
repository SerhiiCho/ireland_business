<?php wp_head(); ?>

<?php get_template_part('inc/front/sidebar'); ?>

<div class="ieb-wrapper">
    <div class="ieb-wrapper-inner">

        <?php get_template_part('inc/front/navmenu'); ?>

        <div class="ieb-wrapper__content ieb-wrapper__content--in">
            <header class="ieb-header">
                <figure class="ieb-header__figure">
                    <img src="<?php ieb_get_img('scene.jpg'); ?>"
                        alt="<?php _e('Баннер изображение', 'ieb'); ?>"
                    >
                </figure> <!-- / .ieb-header__figure -->

                <div class="ieb-header__line"></div>

                <div class="ieb-header__logo-place">
                    <div class="ieb-header__logo-place__logo">
                        <a href="#!" title="<?php _e('Логотип', 'ieb'); ?>">
                            <img src="<?php ieb_get_img('logo.png'); ?>"
                                alt="<?php _e('Логотип', 'ieb'); ?>"
                            >
                        </a>
                    </div>
                </div>
            </header> <!-- / .ieb-header -->
        </div> <!-- / .ieb-wrapper__content -->
    </div> <!-- / .ieb-wrapper-inner -->
</div> <!-- / .ieb-wrapper -->

<?php wp_footer(); ?>