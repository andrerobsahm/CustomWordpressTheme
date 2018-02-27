<?php
declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

wp_enqueue_style( 'style', get_stylesheet_uri() );
