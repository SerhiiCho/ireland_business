<?php

add_action('wp_ajax_ieb_handle_contact_form', 'ieb_handle_contact_form');
add_action('wp_ajax_nopriv_ieb_handle_contact_form', 'ieb_handle_contact_form');

/**
 * @version 1.0.0
 * @author Serhii Cho <serhiicho@protonmail.com>
 * @return void
 */
function ieb_handle_contact_form(): void
{
    check_ajax_referer('ieb');

    $name = wp_strip_all_tags($_POST['name']);
    $gender = wp_strip_all_tags($_POST['gender']);

    if (ieb_validate_data([$name, $gender])) {
        echo wp_insert_post([
            'post_title' => $name,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'ieb-contact',
            'meta_input' => [
                '_contact_gender_value_key' => $gender
            ]
        ]);
        exit;
    }
    echo 0;
    exit;
}

/**
 * @version 1.0.0
 * @author Serhii Cho <serhiicho@protonmail.com>
 * @param array $data
 * @return boolean
 */
function ieb_validate_data(array $data): bool
{
    foreach ($data as $key => $value) {
        if (!isset($value))
            return false;
    }
    return true;
}