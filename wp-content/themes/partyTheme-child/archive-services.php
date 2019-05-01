<?php get_header();
include 'menu.php' ?>

<div class="container">
    <div class="row wrap">

        <?php /* Start the Loop */
        while ( have_posts() ) : the_post(); ?>

        <div class="card border-info w-25 m-3">
            <img src="<?php the_field('image') ?>" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title text-info"><a href="<?php the_permalink() ?>"><?php the_field('soustitre') ?></a></h5>
                <h6 class="text-success"><?php the_field('nom') ?></h6>
                <p class="card-text"><?php the_field('description') ?></p>
            </div>

            <div class="card-footer text-muted">
                <small><?php the_terms($post->ID, 'public', 'Service dédié aux : ') ?></small>
            </div>
        </div>

        <?php endwhile; ?>

    </div>
</div>

<?php get_footer();