<?php

defined( 'ABSPATH' ) || exit;

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
    <?php
	do_action( 'woocommerce_before_shop_loop_item' );
	?>
    <div class="articles__article ">
        <div class="articles__article__contenu toy_zine division background">


            <div class="articles__article__contenu__details details">
                <p class="details__text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                    sea takimata sanctus.
                </p>
                <p class="details__title">
                    <?php
				do_action( 'woocommerce_shop_loop_item_title' );
				?>
                </p>
                <?php
				do_action( 'woocommerce_after_shop_loop_item_title' );
				?>

            </div>
            <picture>
                <?php
				do_action( 'woocommerce_before_shop_loop_item_title' );
				?>
            </picture>
            <?php
	            do_action( 'woocommerce_after_shop_loop_item' );
	            ?>
            <div class="label_categorie">
                <p class="categorie">
                    <?php echo wc_get_product_category_list( $product->get_id(),  _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) ); ?>
                </p>
            </div>


        </div>
        <div class="articles__article__label">
            <span><?php
				do_action( 'woocommerce_shop_loop_item_title' );
				?></span>
            <span><?php
				do_action( 'woocommerce_after_shop_loop_item_title' );
				?></span>
        </div>
    </div>

</li>
