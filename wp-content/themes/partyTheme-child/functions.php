<?php
/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Services', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'service', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Services'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les services'),
		'view_item'           => __( 'Voir les services'),
		'add_new_item'        => __( 'Ajouter un service'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le service'),
		'update_item'         => __( 'Modifier le service'),
		'search_items'        => __( 'Rechercher un service'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Services'),
		'description'         => __( 'Tous les services'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'services'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici et ses arguments
	register_post_type( 'services', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );

add_action( 'init', 'wpm_add_taxonomies', 0 );

function wpm_add_taxonomies() {
	
	// Taxonomie Fournisseurs

	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_f = array(
		'name'              			=> _x( 'fournisseur', 'taxonomy general name'),
		'singular_name'     			=> _x( 'nom', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher un fournisseur'),
		'all_items'        				=> __( 'Tout'),
		'edit_item'         			=> __( 'Editer'),
		'update_item'       			=> __( 'Mettre à jour'),
		'add_new_item'     				=> __( 'Ajouter un nouveau fournisseur'),
		'new_item_name'     			=> __( 'nom'),
		'separate_items_with_commas'	=> __( 'Séparer les fournisseurs avec une virgule'),
		'menu_name'         => __( 'Fournisseurs'),
	);

	$args_f = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => false,
		'labels'            => $labels_f,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'fournisseurs' ),
	);

    register_taxonomy( 'fournisseurs', 'services', $args_f );
    
	$labels_cat_service = array(
		'name'                       => _x( 'Type de services', 'taxonomy general name'),
		'singular_name'              => _x( 'Type de service', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher un type de service'),
		'popular_items'              => __( 'type de services populaires'),
		'all_items'                  => __( 'Tous les type de services'),
		'edit_item'                  => __( 'Editer un type de service'),
		'update_item'                => __( 'Mettre à jour un type de service'),
		'add_new_item'               => __( 'Ajouter un nouveau type de service'),
		'new_item_name'              => __( 'Nom du nouveau type de service'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer un type de service'),
		'choose_from_most_used'      => __( 'Choisir parmi les type de services les plus utilisés'),
		'not_found'                  => __( 'Pas de type de services trouvés'),
		'menu_name'                  => __( 'Type de services'),
	);

	$args_cat_service = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
		'hierarchical'          => true,
		'labels'                => $labels_cat_service,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'typeDeService' ),
	);

	register_taxonomy( 'typeDeService', 'services', $args_cat_service );

	$labels_public = array(
		'name'                       => _x( 'publics', 'taxonomy general name'),
		'singular_name'              => _x( 'public', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une catégorie de public'),
		'popular_items'              => __( 'Catégories de public populaires'),
		'all_items'                  => __( 'Toutes les Catégories de public'),
		'edit_item'                  => __( 'Editer une Catégorie de public'),
		'update_item'                => __( 'Mettre à jour une Catégorie de public'),
		'add_new_item'               => __( 'Ajouter une Catégorie de public'),
		'new_item_name'              => __( 'Nom de la nouvelle Catégorie de public'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une Catégorie de public'),
		'choose_from_most_used'      => __( 'Choisir parmi les Catégories de public les plus utilisés'),
		'not_found'                  => __( 'Pas de Catégorie de public trouvés'),
		'menu_name'                  => __( 'Public'),
	);

	$args_public = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
		'hierarchical'          => true,
		'labels'                => $labels_public,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'public' ),
	);

	register_taxonomy( 'public', 'services', $args_public );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/librairies/fontawesome/css/all.min.css' );
    wp_enqueue_style( 'bootstrap_file', get_stylesheet_directory_uri() . '/librairies/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
}

function theme_scripts(){
    global $wp_scripts;
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/jQuery/jquery.js', null, true );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/librairies/bootstrap/js/bootstrap.bundle.min.js', null, true );
    wp_enqueue_script( 'js', get_stylesheet_directory_uri() . '/js/script.js');
}
 
add_action( 'wp_enqueue_scripts', 'theme_scripts');
