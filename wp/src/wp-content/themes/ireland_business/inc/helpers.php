<?php

/**
 * Helper for get_template_directory() function, to require
 * all files from inc folder
 *
 * @version 1.0.0
 * @author Serhii Cho <serhiicho@protonmail.com>
 * @param array $paths
 * @return void
 */
function ieb_require_inc_files(array $paths): void
{
    array_map(function ($path) {
        require_once get_template_directory() . "/inc/{$path}.php";
    }, $paths);
}

/**
 * Helper for returning path to current theme directry
 *
 * @param string $path
 * @return string
 */
function ieb_get_dir_uri(string $path): string
{
    return get_template_directory_uri() . "/{$path}";
}

/**
 * Adds version to link href if it was modified
 *
 * @version 1.0.0
 * @author Serhii Cho <serhiicho@protonmail.com>
 * @param string $file
 * @return string
 */
function ieb_file_ver(string $file): string
{
    try {
        return filemtime(get_template_directory() . "/{$file}");
    } catch (Exception $e) {
        return '';
    }
}

/**
 * Generates random background color
 *
 * @version 1.0.0
 * @author Serhii Cho <serhiicho@protonmail.com>
 * @return string
 */
function ieb_rand_bg(): string
{
    $rgb = [rand(1, 255), rand(1, 255), rand(1, 255)];
    return print("background-color:rgba({$rgb[0]},{$rgb[1]},{$rgb[2]},.3);");
}
