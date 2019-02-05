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
                </figure>
            </header> <!-- / .ieb-header -->
        </div> <!-- / .ieb-wrapper__content -->
    </div> <!-- / .ieb-wrapper-inner -->
</div> <!-- / .ieb-wrapper -->

<?php wp_footer(); ?>