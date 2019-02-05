<?php wp_head(); ?>

<?php get_template_part('inc/front/sidebar'); ?>

<!-- .ieb-wrapper -->
<div class="ieb-wrapper">

    <!-- .ieb-nav-wrap .ieb-nav-half -->
    <div class="ieb-nav-wrap ieb-nav-half">
        <nav class="ieb-nav-wrap__main">
            <ul class="ieb-nav-wrap__main__menu">
                <li class="ieb-nav-wrap__main__menu__item">
                    <a href="#!" class="ieb-active"><?php _e('Главная', 'ieb'); ?></a>
                </li>
                <li class="ieb-nav-wrap__main__menu__item">
                    <a href="#!"><?php _e('О нас', 'ieb'); ?></a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- / .ieb-nav-wrap / .ieb-nav-half -->

    <!-- .ieb-wrapper__content -->
    <div class="ieb-wrapper__content ieb-wrapper__content--in">
        <div class="ieb-wrapper-inner">
            <!-- .ieb-header -->
            <header class="ieb-header">
                <figure class="ieb-header__figure">
                    <img src="http://demo.virtuti.info/demonstrations/vt12/wp-content/uploads/2016/02/scene.jpg" alt="">
                </figure>
            </header>
            <!-- / .ieb-header -->
        </div>
    </div>
    <!-- / .ieb-wrapper__content -->
</div>
<!-- / .ieb-wrapper -->

<?php wp_footer(); ?>