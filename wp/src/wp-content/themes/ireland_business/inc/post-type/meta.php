<?php

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