<?php

require('typerocket/init.php');
require('inc/init.php');

function tudor_menus()
{

    $locations = array(
        'main-menu' => 'Main Menu',
        'top-menu' => 'Top Menu',
        'footer-social' => 'Footer Social',
        'privacy' => 'Privacy'
    );

    register_nav_menus($locations);
}

add_action('init', 'tudor_menus');