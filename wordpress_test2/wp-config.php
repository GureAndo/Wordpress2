<?php
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
define( 'DB_NAME', 'wordpress2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'glbHzul7B/F3~eV!sKz h5-%hH7f6aZ~Gu`=`4>nzevpB_`0aiN{&,:?iQkeqXIN' );
define( 'SECURE_AUTH_KEY',  '1#bOO_omoG<?j]Ml?8)R9-R>xoH9^rs9ZRI4SR%47D]Qa@>->bGZrkZ@Ouy9&|_x' );
define( 'LOGGED_IN_KEY',    '7OE%Iwcgg~G&-{*KgO_^@|hBmYR|y|RY<Uia$k{e LOe42Nth2k4||*UaHil5/29' );
define( 'NONCE_KEY',        ']EGZ[36lol{)}wyIUL!}OKQ}myw3pF.dUl*dnx8~Tm55uSX)2U3q[z O@Cy)Dsz:' );
define( 'AUTH_SALT',        'B$sRJZR4<;/fR 8lC}mt1j%E~leVgT:=O93el{e+Bs%@f0S:a{RA(r1sGMH1|M4u' );
define( 'SECURE_AUTH_SALT', 'h3%I.$vNT,h!pOF(4KrI===rj$j$ZHmPtiw#FPPds|HqY(u^x$Ono&q,W8LCRY~n' );
define( 'LOGGED_IN_SALT',   'HD=<L2Cj$h0krqtXwy5otMvGRaJBL8%Z|Rb|pJ;bNqudX*BF0#;t:,4s+smVcHG;' );
define( 'NONCE_SALT',       ' lCW1vEnO<rI$Q<*Bc(.z51}u8}:{n^X|P9u2 (e-L@-Qs1dj/J%,*EM*yAQkg]v' );
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
