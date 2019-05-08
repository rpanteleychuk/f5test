
<?php

function f5test_child_styles () {

    wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_style('f5test-main-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css');

}

add_action( 'wp_enqueue_scripts', 'f5test_child_styles');


function f5test_child_scripts () {
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.4.1.min.js', '','',true);

    wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', '','',true);

    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', '','',true);

    wp_enqueue_script('f5test-main', get_stylesheet_directory_uri() . '/assets/js/main.min.js', '','',true);
}

add_action('wp_enqueue_scripts', 'f5test_child_scripts');


show_admin_bar(false);





