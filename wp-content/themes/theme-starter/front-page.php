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

        <div class="logo_pictos">
            <div class="logozino">
                <img src="<?php echo get_field("logo_zino",17)?>" class="imglogozino">
            </div>

            <div class="pictosheader">
                <a href="<?php echo get_field("lien_instagram",17)?>"><i class="fab fa-instagram pictoinstanoir"></i></a>
                <a href="mailto:<?php echo get_field("lien_mail",17)?>"><i class="far fa-envelope pictomailnoir"></i></a>
            </div>
        </div>

    </header>
    <main>

        <div class="titre">
            <h1><?php echo get_field("titre_home",17)?></h1>
        </div>

        <div class="texte_image">

            <div class="texte_presentation">

                <p>
                    <?php echo get_field("paragraphe1_home",17)?>
                </p>

                <p>
                    <?php echo get_field("paragraphe2_home",17)?>
                </p>

                <p>
                    <?php echo get_field("paragraphe3_home",17)?>
                </p>

            </div>

            <div class="image livre">
                <picture>
                    <img src="<?php echo get_field("image_presentation_zino",17)?>" alt="Livre Zino" class="livrezino" />
                </picture>
            </div>

        </div>


        <nav class="boutons">

            <div class="zinoShop">
                <a href="<?php echo get_template_directory_uri(); ?>/shop"><button type="button" class="zinoshopbouton"> <   ZINO <span>• SHOP</span></button></a>
            </div>

            <div class="zinowork">
                <a href="<?php echo get_template_directory_uri(); ?>/work"><button type="button" class="zinoworkbouton">ZINO <span>• WORK</span>   > </button></a>
            </div>

        </nav>

    </main>

<?php get_footer(); ?>