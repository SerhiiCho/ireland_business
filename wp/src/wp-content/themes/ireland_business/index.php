<?php
wp_head();
get_template_part('inc/front/sidebar');
?>

<div class="ieb-wrapper">
    <div class="ieb-wrapper-inner">

        <?php get_template_part('inc/front/navmenu'); ?>

        <div class="ieb-wrapper__content ieb-wrapper__content--in">
            <div class="ieb-wrapper__content__inner">
                <?php
                    get_template_part('inc/front/header');
                    get_template_part('inc/front/intro');
                    get_template_part('inc/front/contact');
                ?>
            </div> <!-- / .ieb-wrapper__content-inner -->
        </div> <!-- / .ieb-wrapper__content -->
    </div> <!-- / .ieb-wrapper-inner -->

    <?php get_template_part('inc/front/footer'); ?>
</div> <!-- / .ieb-wrapper -->

<?php wp_footer(); ?>