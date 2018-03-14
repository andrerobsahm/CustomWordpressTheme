<?php
/*
 * The template for displaying 404 pages (Not Found)
 */
 ?>


<?php get_header(); ?>

    <div class="d-flex justify-content-center mb-10">
        <img class="img-fluid" style="width:60%; height:60%;" src="https://media.giphy.com/media/13d2jHlSlxklVe/giphy.gif" alt="Nothing">
    </div>

    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex flex-column">
            <h2><?php _e("Hey. There's no content here.", 'yrgo'); ?></h2>
            <h5><?php _e('Maybe try a search?', 'yrgo'); ?></h5>

            <?php get_search_form(); ?>
        </div><!-- .page-content -->
    </div><!-- .page-wrapper -->

<?php get_footer(); ?>
