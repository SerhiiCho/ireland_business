<?php

add_action('init', function() {
    register_post_type('ieb-contact', [
        'labels' => [
            'name' => __('Сообщения', 'ieb'),
            'singular_name' => __('Сообщение', 'ieb'),
            'menu_name' => __('Сообщения', 'ieb'),
            'name_admin_bar' => __('Сообщение', 'ieb'),
        ],
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'public' => true,
        'menu_icon' => 'dashicons-email-alt',
        'has_archive' => true,
        // 'supports' => ['title', 'editor', 'author'],
        'supports' => ['title'],
    ]);
});