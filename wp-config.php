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
define( 'DB_NAME', 'tuto1' );

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
define( 'AUTH_KEY',         '31&n3|ak+N1A4/*+tcd?H8gHG$,y%/:_}o@(|M{,R?[Zo{/}?jb)vHf,`q3q/m_]' );
define( 'SECURE_AUTH_KEY',  'c#k{{>&{Vkv%o0r/4.nn[*qMc-B;fB8=KO%t?]#KK5_/lovdKB$4#fFs65oboB[}' );
define( 'LOGGED_IN_KEY',    '%k~9T:8Aj<%Lp)K5,n/$5:K)[}Ij+^|XvGgx]p^T_M7fqu=:vU6I@s um7p79!<0' );
define( 'NONCE_KEY',        'd01,|spLL1yq+QTfr))OJ)v0c-y 9;w|l)pD/6Y>;L!x*DC:2o@Oy/@(|AE+/>)d' );
define( 'AUTH_SALT',        'v3h@qP_,4rlFfbWq$9#|/_1FL(otlH|h6Xc 6vCT/&uUJ9%HJRhB8sa2]sjlMZ+{' );
define( 'SECURE_AUTH_SALT', 'C>2nNlOk@]dq8J$Qd5Uq^Ina2F$;j*4.BZ@b{ysV&13=j&%{BONu^?%Dn+ZB{2bO' );
define( 'LOGGED_IN_SALT',   '6$(`LYd{w]-pv+(~SSu(na{6;f/ufp5{[r>eYO=33S O:M5+}imn5{$9blz^6-uN' );
define( 'NONCE_SALT',       '8xyX#U0>c22Q6GJHvMzoBU| ?A5mV@Gn~,=V7hP!E%{a5+l>n^{4-y,Wg^m)P&ar' );
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
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
define ( 'UPLOADS ', ' wp-content / uploads ');
require_once( ABSPATH . 'wp-settings.php' );
