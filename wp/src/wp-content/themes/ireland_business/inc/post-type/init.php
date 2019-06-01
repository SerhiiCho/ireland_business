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
        'capabilities' => [
            'create_posts' => 'do_not_allow',
        ],
        'hierarchical' => false,
        // Set to `false`, if users are not allowed to edit/delete existing posts
        'map_meta_cap' => false, 
        'menu_position' => 5,
        'public' => true,
        'menu_icon' => 'dashicons-email-alt',
        'has_archive' => true,
        // 'supports' => ['title', 'editor', 'author'],
        'supports' => ['title'],
    ]);
});