<?php get_header(); ?>

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
        <h1>ZINO <span class="h1_work">•<?php echo get_field("titre_projet_zino",15)?></span></h1>

        <nav>
            <div class="link-tech-work">
                <a href="<?php echo get_template_directory_uri(); ?>/accueil">ZINO<span> •TECH</span></a>
            </div>
            <div class="link-shop">
                <a href="<?php echo get_template_directory_uri(); ?>/shop">ZINO<span> •$HOP</span></a>
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
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=graphic">
                                    <p>Graphic
                                        <i class="fas fa-plus-circle"></i>
                                    </p>
                                </a>

                            </div>
                            <div class="toy_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=zine">
                                    <p>Zine <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="kit_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=kit">
                                    <p>Kit <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="bank_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=bank">
                                    <p>Bank <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="craft_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=print">
                                    <p>Print <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="pin_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=pin">
                                    <p>Pin <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="graphic_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=pad">
                                    <p>Pad <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="graphic_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=graphy">
                                    <p>Graphy <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="kit_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=badge">
                                    <p>Badge <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="bank_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=box">
                                    <p>Box <i class="fas fa-plus-circle"></i></p>
                                </a>

                            </div>
                            <div class="craft_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=craft">
                                    <p>Craft <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                            <div class="pin_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=code">
                                    <p>Code <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="graphic_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=gif">
                                    <p>Gif <i class="fas fa-plus-circle"></i></p>
                                </a>
                            </div>

                            <div class="toy_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=toy">
                                    <p>Toy <i class="fas fa-plus-circle"></i></p>
                                </a>

                            </div>
                            <div class="kit_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=ar">
                                    <p>AR <i class="fas fa-plus-circle"></i></p>
                                </a>

                            </div>
                            <div class="bank_filter">
                                <a href="<?php echo get_template_directory_uri(); ?>/work/?category_name=laser">
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
    <section class="contenu">




        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="projets">

            <div class="projet quinarybox background">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 img">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                        <div class="col-xl-8 col-sm-12">
                            <div class="TextePresentation">
                                <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                <p><?php the_content(); ?></p>
                                <div class="TagProject">
                                    <?php $terms = get_the_terms( $post->ID, 'category'); 

                                    if( $terms ): ?>


                                    <?php foreach( $terms as $term ): ?>

                                    <p class="Tag <?php echo $term->slug ?>Tag"><?php echo $term->name; ?></p>

                                    <?php endforeach; ?>


                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>



        <?php endwhile; ?>

        <?php else: ?>


        <p>Aucun article n'est pour le moment disponible sur cette page.</p>


        <?php endif; ?>


    </section>

    <section class="navigation">
        <?php the_posts_pagination(array('prev_text' => __('<'), 'next_text' => __('>'))); ?>

        <div class="centrer">

            <div class="pagination background">
                <!--
                    <a href="#">&#60;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&#62;</a>
        -->
            </div>
        </div>


    </section>
</main>

<?php get_footer(); ?>
