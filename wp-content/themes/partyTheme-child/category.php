<?php get_header();

include 'menu.php'?>

<div class="container">
    <div id="partenaire">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://localhost/theParty/wp-content/themes/partyTheme-child/img/enTeteCkl.png" class="d-block w-100" alt="CKL">
                </div>

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="carousel-item">
                        <h1 class="display-3 text-center"><?php the_title() ?></h1>
                        <span class="text-center"><?php the_content() ?></span>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer();