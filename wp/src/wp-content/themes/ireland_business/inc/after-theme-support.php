<?php

add_action('after_setup_theme', function () {
    load_theme_textdomain('ieb', get_template_directory() . '/languages');
});