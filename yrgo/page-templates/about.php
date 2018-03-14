<?php
/* Template Name: About */
?>

<?php

// Fetch all students by their post type.
$employees = get_posts(['post_type' => 'employee']);

?>
<?php get_header(); ?>

<div class="row">
    <div class="col">
        <section>
            <?php if ($employees) : ?>
                <?php foreach ($employees as $employee) : ?>
                    <?php //setup_postdata( $employee );?>
                <article class="card">
                    <b class="card-header">
                        <a href="<?php the_permalink($employee); ?>">
                            <?php echo $employee->post_title; ?>
                        </a>
                    </b>
                    <p class="card-body"><?php echo $employee->post_content; ?></p>
                </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
