<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('ieb-style', ieb_get_dir_uri('style.css'), [], ieb_file_ver('style.css'));
    wp_enqueue_script('ieb-js', ieb_get_dir_uri('assets/main.js'), [], ieb_file_ver('assets/main.js'), true);
});