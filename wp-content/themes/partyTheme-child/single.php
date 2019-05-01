<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php include 'menu.php' ?>

    <div class="container">
        <h1 class="display-2"><?php the_title() ?></h1>

        <div class="row">
            <?php the_content() ?>
        </div>

    </div>
    <?php endwhile;

get_footer();