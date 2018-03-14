<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()): the_post(); ?>

        <p>Email: <?php the_field('email'); ?></p>
        <p>Phone number: <?php the_field('phone'); ?></p>
        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
