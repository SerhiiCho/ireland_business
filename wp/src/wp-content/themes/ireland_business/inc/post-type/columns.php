<?php

add_filter('manage_ieb-contact_posts_columns', function($columns) {
    $new_columns = [
        'name' => __('Имя', 'ieb'),
        'gender' => __('Пол', 'ieb'),
        'date' => __('Дата', 'ieb'),
    ];
    return $new_columns;
});

add_action('manage_ieb-contact_posts_custom_column', function($column, $post_id) {
    switch($column) {
        case 'name':
            the_title();
            break;
        case 'gender':
            echo get_post_meta($post_id, '_contact_gender_value_key', true);
    }
}, 10, 2);
