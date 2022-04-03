<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/woo.css">

<main role="main" id="main">
    <header>
        <div class="background-lines">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div class="ligne-delete"></div>
            <div class="ligne-delete"></div>
            <div class="ligne-delete"></div>
        </div>
        <div class="shop-nav">
            <a href="<?php echo get_template_directory_uri(); ?>/mon-compte"><i class="fas fa-user"></i></a>
            <a href="<?php echo get_template_directory_uri(); ?>/panier"><i class="fas fa-shopping-basket"></i></a>
        </div>
        <h1>
            <a href="<?php echo get_template_directory_uri(); ?>/shop"> 
            <?php woocommerce_page_title(); ?>
            </a>
        </h1>
        <nav>
            <div class="link-work">
                <a href="<?php echo get_template_directory_uri(); ?>/work">ZINO<span> •WORK</span></a>
            </div>
            <div class="link-tech">
                <a href="<?php echo get_template_directory_uri(); ?>/accueil">ZINO<span> •TECH</span></a>
            </div>
        </nav>
    </header>

    <section class="filtres background">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row">

                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="graphic_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/graphic/">
                                    <p>Graphic <i class="fas fa-plus-circle"></i>
                                    </p>
                                </a>

                            </div>
                            <div class="toy_filter">
                                <a href="http://zinoelise.tp.crea.pro/categorie-produit/zine/">
                                    <p>Zine <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="kit_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/kit/">
                                    <p>Kit <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="bank_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/bank/">
                                    <p>Bank <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="craft_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/print/">
                                    <p>Print <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="pin_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/pin/">
                                    <p>Pin <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="graphic_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/pad/">
                                    <p>Pad <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="graphic_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/graphy/">
                                    <p>Graphy <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="kit_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/badge/">
                                    <p>Badge <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="bank_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/box/">
                                    <p>Box <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="craft_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/craft/">
                                    <p>Craft <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="pin_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/code/">
                                    <p>Code <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="graphic_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/gif/">
                                    <p>Gif <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="toy_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/toy/">
                                    <p>Toy <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="kit_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/ar/">
                                    <p>AR <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="bank_filter">
                            <a href="http://zinoelise.tp.crea.pro/categorie-produit/laser/">
                                    <p>Laser <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="selecteurs">
                        <div class="search">
                            <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"><i class="fas fa-search"></i> </button>
                                <label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
                                <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="Rechercher un produit ..." value="<?php echo get_search_query(); ?>" name="s" />
                                <input type="hidden" name="post_type" value="product" />
                            </form>
                        </div>
                        <div class="tri">
                            <div class="row">

                                <div class="col-md-6 col-sm-0">
                                    <p>Prix</p>
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-0">
                                    <p>Tri</p>

                                    <div class="icones">
                                        <i class="fas fa-sort-alpha-down"></i>
                                        <i class="fas fa-sort-alpha-down-alt"></i>
                                        <i class="fas fa-random"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php woocommerce_content(); ?>

    <?php if(is_shop()) {?>
    <div class="container">
        <div class="row infos background">
            <div class="col-xl-4 col-12">
                <picture>
                    <img src="<?php echo get_field("image_valeur_1",9)?>" alt="localisation" title="localisation" style="width:100px" />
                </picture>
                <p><?php echo get_field("texte_valeur_1",9)?></p>
            </div>
            <div class="col-xl-4 col-12">
                <picture>
                    <img src="<?php echo get_field("image_valeur_2",9)?>" alt="livraison" title="livraison" style="width:100px"/>
                </picture>
                <p><?php echo get_field("texte_valeur_2",9)?></p>
            </div>
            <div class="col-xl-4 col-12">
                <picture>
                    <img src="<?php echo get_field("image_valeur_3",9)?>" alt="transaction" title="transaction" style="width:100px"/>
                </picture>
                <p><?php echo get_field("texte_valeur_3",9)?>t</p>
            </div>
        </div>
    </div>
    <?php } ?>
</main>

<?php get_footer(); ?>
