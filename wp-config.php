<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'eprojet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9~.ZXN7l4oan25cA/-6+yJ)X<(W-WW/du@qfb_k*zYkCthnB]u|U,a[LbOc@&lKs' );
define( 'SECURE_AUTH_KEY',  'U&NgXpqgm>gj/=/>1RmSG.<yWqf-MP|.Gl+E7C]r|@o-^;s1hX2[?.}ES%3RZ,%o' );
define( 'LOGGED_IN_KEY',    '/EJS*!b=4Vio@diUd8W8FausN(1Fplil3(M~9#{OQq-Xo1&?E&LGM$:#096C*yI0' );
define( 'NONCE_KEY',        '0U31~$sC8h~?+u4dxdo(&c0KH3<jsp!f=%eS8TOrnS/oReW>gG.t_PSZ,}rMUiW#' );
define( 'AUTH_SALT',        ' +S:&TUI[{xij:q4Ca1~ntr4dcCsj[?14|NLK3PWR/RrG7j @Fdr|Y<*mWK>|@}`' );
define( 'SECURE_AUTH_SALT', 'qi3Xbi$^cpjys}&I,Vz!m5leOJE?7xjs. JRb.6?DYg/<>&-32vw3>jtjb`2 )nt' );
define( 'LOGGED_IN_SALT',   'fwHUq~N0@EL6o(_o9Z$x?{d<ohx,#h6sneOj8[f:/65m]Xk43sc)_!zFJm8t+>(h' );
define( 'NONCE_SALT',       'A!cyPupm$Sh6sqm7bcnCaHM0NkUG[v&GaqjV4Xe9uNvq~g4fcHWNG`u& ejoW*ZD' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

// ** Permettre a Wordpress de traverser le proxy ** //
define('WP_PROXY_HOST', '172.16.104.254');
define('WP_PROXY_PORT', '3128');
define('WP_PROXY_USERNAME', 'lutilisateur');
define('WP_PROXY_PASSWORD', 'sonpassword');
define('WP_PROXY_BYPASS_HOSTS', 'localhost, 172.16.0.0/16, 127.0.0.0/8');
