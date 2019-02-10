<?php

require_once get_template_directory() . '/inc/helpers.php';

ieb_require_inc_files([
    'after-theme-support',
    'enqueue_scripts',
    'post-type/init',
    'post-type/meta',
    'post-type/columns',
    'ajax',
]);
