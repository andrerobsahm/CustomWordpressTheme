<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">YRGO</a>
          <ul class="navbar-nav">
          <?php
          $pages = get_pages();
              foreach ($pages as $page) :  ?>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?>
                  </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <div class="container">
