<?php 
/**
 *Template Name: home
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <img id="ban" src="<?php the_field('banniere'); ?>">
    <?php include 'menu.php' ?>

    <div class="container">
        <h1 class="display-2 ml-3"><?php the_field('titre') ?></h1>

        <div class="row">

            <div class="row col-9">
                <div class="col-6">
                    <?php the_field('presentation') ?>
                </div>
                <div class="col-6">
                    <?php the_field('reflexion') ?>
                </div>
                <div class="col-12">
                    <h3><?php the_field('soustitre') ?></h3>
                    <div><?php the_field('acces') ?></div>
                </div>
            </div>

<?php endwhile; ?>

            <div class="row col-3">
                <div class="col-12 border-left border-info bg-light">
                    <h3 class="my-5">Partenaires</h3>
                    <ul class="ml-5">
                        <?php $posts = get_posts('category_name=partenaire');
                        foreach($posts as $post) : setup_postdata( $post ) ?>
                            <li>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>

    </div>
<?php get_footer();