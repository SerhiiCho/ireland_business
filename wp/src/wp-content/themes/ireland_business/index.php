<?php wp_head(); ?>

<?php get_template_part('inc/front/sidebar'); ?>

<div class="ieb-wrapper">
    <div class="ieb-wrapper-inner">

        <div class="ieb-nav-wrap1 ieb-nav-half">
            <nav class="ieb-nav-wrap1__main">
                <ul class="ieb-nav-wrap1__main__menu">
                    <li class="ieb-nav-wrap1__main__menu__item">
                        <a href="#!" class="ieb-active"><?php _e('Главная', 'ieb'); ?></a>
                    </li>
                    <li class="ieb-nav-wrap1__main__menu__item">
                        <a href="#!"><?php _e('О нас', 'ieb'); ?></a>
                    </li>
                </ul>
            </nav>
        </div> <!-- / .ieb-nav-wrap1 --> <!-- / .ieb-nav-half -->

        <div class="ieb-nav-wrap2 ieb-nav-half">
            <nav class="ieb-nav-wrap2__mobile">
                <a href="#!" class="ieb-nav-wrap2__mobile__ham">
                    <img src="http://demo.virtuti.info/demonstrations/vt12/wp-content/themes/pub/images/menu.png" alt="" class="ieb-nav-wrap2__mobile__ham__img">
                </a>
                <ul class="ieb-nav-wrap2__menu">
                    <li class="ieb-nav-wrap2__menu__item">
                        <a href="#!"><?php _e('Главная', 'ieb'); ?></a>
                    </li>
                    <li class="ieb-nav-wrap2__menu__item">
                        <a href="#!"><?php _e('О нас', 'ieb'); ?></a>
                    </li>
                </ul>
            </nav>
        </div> <!-- / .ieb-mobile-wrap2 --> <!-- / .ieb-nav-half -->

        <div class="ieb-wrapper__content ieb-wrapper__content--in">
            <header class="ieb-header">
                <figure class="ieb-header__figure">
                    <img src="http://demo.virtuti.info/demonstrations/vt12/wp-content/uploads/2016/02/scene.jpg" alt="">
                </figure>
            </header> <!-- / .ieb-header -->
        </div> <!-- / .ieb-wrapper__content -->
    </div> <!-- / .ieb-wrapper-inner -->
</div> <!-- / .ieb-wrapper -->

<?php wp_footer(); ?>