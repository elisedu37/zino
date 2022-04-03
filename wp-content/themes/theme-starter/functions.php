<?php
/*------------------------------------*\
	Functions
\*------------------------------------*/
//Ajout de l'image à la une
add_theme_support( 'post-thumbnails' );

//Ajout des extraits sur les pages
add_post_type_support( 'page', 'excerpt' );

//Définition de l'emplacement des menus
function define_menus()
{
    register_nav_menus( array( // On utilise un tableau afin de pouvoir spécifier la position de plusieurs menus
                               'header-menu' => __( 'Navigation principal', 'html5-blank' ), // Main Navigation
                        ) );
}
add_action( 'init', 'define_menus' );

/*---------------------------------------------------------------------*\
	Déclaration d'un type de contenu personnalisé - Custom Post Types
\*---------------------------------------------------------------------*/
function custom_post_types()
{
    register_post_type(
        'test',
        array(
            'label'           => 'Un post type',
            'labels'          => array(
                'name'               => 'Post types',
                'singular_name'      => 'Post type',
                'all_items'          => 'Tous',
                'add_new_item'       => 'Ajouter',
                'edit_item'          => 'Éditer',
                'new_item'           => 'Nouveau',
                'view_item'          => 'Voir',
                'search_items'       => 'Rechercher',
                'not_found'          => 'Pas de résultat',
                'not_found_in_trash' => 'Pas de résultat dans la corbeille',
            ),
            'public'          => true,
            'capability_type' => 'post',
            'supports'        => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
            ),
            'has_archive'     => true,
        )
    );
}
add_action( 'init', 'custom_post_types' );

/*---------------------------------------------------------------------*\
	Déclaration d'une taxonomie personnalisée
\*---------------------------------------------------------------------*/
//function custom_taxonomies()
//{
//    register_taxonomy(
//        'taxonomy-test', 'test',
//        array(
//            'hierarchical' => true,
//            'label'        => 'Type de projet',
//            'show_ui'      => true,
//            'query_var'    => 'type-projet',
//        )
//    );
//}
//add_action( 'init', 'custom_taxonomies' );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
/*add_filter( 'woocommerce_enqueue_styles', '__return_false' );*/


if ( ! function_exists( 'woocommerce_content' ) ) {

	/**
	 * Output WooCommerce content.
	 *
	 * This function is only used in the optional 'woocommerce.php' template.
	 * which people can add to their themes to add basic woocommerce support.
	 * without hooks or modifying core templates.
	 */
	function woocommerce_content() {

		if ( is_singular( 'product' ) ) {

			while ( have_posts() ) :
				the_post();
				wc_get_template_part( 'content', 'single-product' );
			endwhile;

		} else {
			?>

			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

				<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

			<?php endif; ?>

			<?php do_action( 'woocommerce_archive_description' ); ?>

			<?php if ( woocommerce_product_loop() ) : ?>

				<?php do_action( 'woocommerce_before_shop_loop' ); ?>

				<?php woocommerce_product_loop_start(); ?>

				<?php if ( wc_get_loop_prop( 'total' ) ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php do_action( 'woocommerce_after_shop_loop' ); ?>

				<?php
			else :
				do_action( 'woocommerce_no_products_found' );
			endif;
		}
	}
}