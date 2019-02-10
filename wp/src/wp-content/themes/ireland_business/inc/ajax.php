<?php

add_action('wp_ajax_ieb_handle_contact_form', 'ieb_handle_contact_form');
add_action('wp_ajax_ieb_handle_contact_form', 'ieb_handle_contact_form');

function ieb_handle_contact_form() {
    check_ajax_referer('ieb');

    $name = wp_strip_all_tags($_POST['name']);
    $gender = wp_strip_all_tags($_POST['gender']);

    // validate data here .....

    wp_insert_post([
        'post_title' => $name,
        'post_content' => $gender,
        'post_author' => 1,
    ]);

    echo 'nice';
    exit;
}