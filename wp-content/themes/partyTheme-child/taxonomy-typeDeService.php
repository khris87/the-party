<?php get_header();
include 'menu.php' ?>
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/theParty/wp-content/themes/partyTheme-child/img/enTeteCkl.png" class="mx-auto d-block w-75" alt="CKL">
                <div class="carousel-caption d-none d-md-block border rounded border-info">
                    <h5 class="text-info">Créatrices d'événements</h5>
                </div>
            </div>

            <?php while ( have_posts() ) : the_post(); ?>

            <div class="carousel-item">
                <img src="<?php the_field('image') ?>" class="mx-auto d-block w-75" alt="<?php the_field('nom'); ?>">
                <div class="carousel-caption d-none d-md-block border rounded border-info">
                    <h5 class="text-info"><?php the_field('soustitre') ?></h5>
                </div>
            </div>

            <?php endwhile; ?>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>

<?php get_footer();