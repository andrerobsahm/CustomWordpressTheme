<?php

/*
 * (c) André Robsahm.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
add_action('init', function () {
    register_post_type('employee', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Employee'),
            'edit_item' => __('Edit Employee'),
            'name' => __('Employees'),
            'search_items' => __('Search Employees'),
            'singular_name' => __('Employee'),
        ],
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 20,
        'public' => true,
    ]);
});
