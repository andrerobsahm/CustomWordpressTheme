<?php get_header(); ?>

<div class="row">

    <div class="col">

        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>

    <div class="col">A wholeLottaStuff</div>

</div>

<?php get_footer(); ?>
