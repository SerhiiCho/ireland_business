<?php wp_head(); ?>

<?php get_template_part('inc/front/sidebar'); ?>

<div class="ieb-wrapper">
    <div class="ieb-wrapper-inner">

        <?php get_template_part('inc/front/navmenu'); ?>

        <div class="ieb-wrapper__content ieb-wrapper__content--in">
            <div class="ieb-wrapper__content__inner">
                <header class="ieb-header">
                    <figure class="ieb-header__figure">
                        <div class="ieb-lazy-load-lg ieb-lazy-load"
                            data-alt="<?php _e('Баннер изображение', 'ieb'); ?>"
                            data-lazy-load="<?php ieb_get_img('scene.jpg'); ?>"
                        >
                    </div>
                    </figure> <!-- / .ieb-header__figure -->

                    <div class="ieb-header__line"></div>

                    <div class="ieb-header__logo-place">
                        <div class="ieb-header__logo-place__logo">
                            <a href="#!" title="<?php _e('Логотип', 'ieb'); ?>">
                                <div class="ieb-lazy-load-lg ieb-lazy-load"
                                    data-alt="<?php _e('Логотип', 'ieb'); ?>"
                                    data-lazy-load="<?php ieb_get_img('logo.png'); ?>"
                                ></div>
                            </a>
                        </div> <!-- / .ieb-header__logo-place__logo -->
                    </div> <!-- / .ieb-header__logo-place -->
                </header> <!-- / .ieb-header -->

                <article class="ieb-intro">
                    <figure class="ieb-intro__figure">
                        <div class="ieb-lazy-load-sm ieb-lazy-load ieb-no-preloader"
                            data-alt="<?php _e('Nрелистник', 'ieb'); ?>"
                            data-lazy-load="<?php ieb_get_img('clovers.png'); ?>"
                            data-class="ieb-intro__figure__side"
                        ></div>
                        <div class="ieb-lazy-load-sm ieb-lazy-load ieb-no-preloader"
                            data-alt="<?php _e('Nрелистник', 'ieb'); ?>"
                            data-lazy-load="<?php ieb_get_img('barrel.png'); ?>"
                            data-class="ieb-intro__figure__center"
                        ></div>
                    </figure> <!-- / .ieb-intro__figure -->
                    <section class="ieb-intro__content" id="ieb-test">
                        <h1 class="ieb-intro__content__title">The Wild Rover</h1>
                        <p class="ieb-intro__content__text">The theme was created especially for Irish pubs but could be easily reverted into any other website if graphics and content replaced. The theme comes with multiple page templates like Menu, Location, Galleries, Gift Shop, Gift Cards and more. Walk through the demo to view all theme features and options.</p>
                    </section> <!-- / .ieb-intro__content -->
                </article> <!-- / .ieb-intro -->
            </div> <!-- / .ieb-wrapper__content-inner -->
        </div> <!-- / .ieb-wrapper__content -->
    </div> <!-- / .ieb-wrapper-inner -->
</div> <!-- / .ieb-wrapper -->

<?php wp_footer(); ?>