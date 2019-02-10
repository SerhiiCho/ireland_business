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

// Meta boxes
add_action('add_meta_boxes', function() {
    add_meta_box('contact-gender', __('Пол', 'ieb'), function($post) {
        wp_nonce_field('save_contact_gender_data', 'ieb_contact_meta_gender_nonce');

        $gender_value = get_post_meta($post->ID, '_contact_gender_value_key', true);

        echo '<label for="ieb-contact-gender-field">' . esc_attr(__('Пол', 'ieb')) . '</label>';
        echo '<input type="text" name="ieb-contact-gender" id="ieb-contact-gender-field" value="' .$gender_value . '" size="25" />';
    }, 'ieb-contact', 'side');
});

add_action('save_post', 'save_contact_gender_data');

function save_contact_gender_data($post_id) {
    if (
        !isset($_POST['ieb_contact_meta_gender_nonce'])
        || !wp_verify_nonce($_POST['ieb_contact_meta_gender_nonce'], 'save_contact_gender_data')
        || defined('DOING_AUTOSAVE') && DOING_AUTOSAVE
        || !current_user_can('edit_post', $post_id)
        || !isset($_POST['ieb-contact-gender'])
    ) { return; }

    $data = sanitize_text_field($_POST['ieb-contact-gender']);
    update_post_meta($post_id, '_contact_gender_value_key', $data);
}