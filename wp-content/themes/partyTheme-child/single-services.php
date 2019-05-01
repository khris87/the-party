<?php get_header();
include 'menu.php' ?>

<div class="container">

<?php /* Start the Loop */
while ( have_posts() ) : the_post();
        the_post_thumbnail(); ?>

        <blockquote class="blockquote">
            <h1 class="mb-0"><?php the_field('nom') ?></h1>
            <footer class="blockquote-footer"><?php the_field('soustitre') ?><cite title="Source Title"></cite></footer>
        </blockquote>
        <img class="img-thumbnail rounded float-left img-fluid w-50" src="<?php the_field('image') ?>" alt="<?php the_field('nom') ?>">
        <p><?php the_field('description') ?></p>
        <span class="lead">à partir de : <?php the_field('tarif') ?> €</span><br>
        <q><?php the_field('commentaires') ?></q>


<?php endwhile; ?>

</div>

<?php get_footer();
