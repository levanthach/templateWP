<?php
//require 'post-type-product.php';

add_filter('tr_theme_options_name', function () {
    return 'theme_options';
});
add_filter('tr_theme_options_page', function () {
    return get_template_directory() . '/inc/theme-options.php';
});
