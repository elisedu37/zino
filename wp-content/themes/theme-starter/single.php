<?php get_header(); ?>
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
    <nav>
        <div class="link-tech-work">
            <a href="<?php echo get_template_directory_uri(); ?>/accueil">ZINO<span> •TECH</span></a>
        </div>
        <div class="link-shop">
            <a href="<?php echo get_template_directory_uri(); ?>/shop">ZINO<span> •$HOP</span></a>
        </div>
    </nav>
</header>
<main role="main" id="main">

    <!-- section -->
    <section>
        <?php if ( have_posts() ):
                while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <article>

            <div class="projet quinarybox background">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 img">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                        <div class="col-xl-8 col-sm-12">
                            <div class="TextePresentation">
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

        </article>

        <?php endwhile; ?>

        <?php else: ?>

        <p>Aucun contenu n'est pour le moment disponible sur cette page.</p>

        <?php endif; ?>

        <?php wp_reset_query(); ?>
    </section>
    <!-- /section -->

</main>

<?php get_footer(); ?>
