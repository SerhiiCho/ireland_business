<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('ieb-style', ieb_get_dir_uri('style.css'), [], ieb_file_ver('style.css'));
    wp_register_script('ieb-js', ieb_get_dir_uri('assets/main.js'));

    wp_localize_script('ieb-js', 'ieb_globals', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ieb'),
        'cont_err' => __('Произошла ошибка при попытке отправить данные. Попробуйте еще раз', 'ieb'),
        'cont_err_required' => __('Заполните все поля', 'ieb'),
        'cont_ok' => __('Данные успешно отправлены', 'ieb'),
    ]);

    wp_enqueue_script('ieb-js', ieb_get_dir_uri('assets/main.js'), [], ieb_file_ver('assets/main.js'), true);
});