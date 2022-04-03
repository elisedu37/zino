<?php

define( 'WP_HOME', 'http://zinoelise.tp.crea.pro/' );
define( 'WP_SITEURL', 'http://zinoelise.tp.crea.pro/' );

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'elgigot_zino' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'elgigot_zino' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'EliseFlorian37' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@d9?{,M0-^@xtxhEjFHR6z }wwO-IN%YVsdX&v/u?15MW?QBn) xoj81{{TJ^.2S' );
define( 'SECURE_AUTH_KEY',  '~7pb|j7%!D*sK5R%2S#tok)Om7uPh 1fk[|2MaYuhQ qs}s/84a=J=;sZ3>^T:eI' );
define( 'LOGGED_IN_KEY',    'ca:I#I=^8?n7pu@]h#7%+Jtd;H :pBUFd!^0Jn qQRLM{`N7hA|GUSBe+&s;<(j#' );
define( 'NONCE_KEY',        '&!t5Yf`kNinBkw 8hCfYAQ859UxBmhYI6R|XN/G.<:1ZC 0&)QIT*O%b_<q_cKaZ' );
define( 'AUTH_SALT',        ']J8yD!P.vuXjO66gG5N-vx>txu(,9:jShx:|*uz^8k&ETI5A K6ft%)NG5].LING' );
define( 'SECURE_AUTH_SALT', 'Xgznlc=b`+,L%z6+|xS53~VN4sK>$/e%Xe4b!n0fvI,17Rsxb0KNErZ#{pyig3`2' );
define( 'LOGGED_IN_SALT',   'tODp,Ilb$Pvd,3WCku/:k>$^`;v8=Br_m SD90p[F8P#r1HRF*x8qmn&Ke;uCT#H' );
define( 'NONCE_SALT',       'c-Nmc;nC7:eimafwVKfj^l18WCA9Pp~>{1&R&,Z1n/k^e}vZBP}8VUpHq(^=zf69' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
