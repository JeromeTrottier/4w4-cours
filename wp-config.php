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
define('DB_NAME', '2022-4w4-3');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'e>%rEo`0!ffT#-qFsk~z6v_iDIbc4wV(]czJ]yJI,2?l[=_8NVrbSVB@P**Wsk6*');
define('SECURE_AUTH_KEY',  'WH6XRQM0yifJ^o]~;c56~o@e&to)<kK/SO3_ OSaQ2cG+G(M3&-#y+z@=LWMt<ZM');
define('LOGGED_IN_KEY',    '=U-_|3%V3q30GnJD1MtTTH^8BK$>{ !Viq(p;#A[8Ey i}Q;.9BB3&G5P 8ugP>c');
define('NONCE_KEY',        '*9q!ysDbW?@X6qDl!YZedqp^I3p[_RF?f`kxM}s>aD7j*rpRz:jE4@<Etv1/^xUq');
define('AUTH_SALT',        'FBX/<?#Uf^*tX2-[MX[6trIoDwy`5#=W:Rp[_k0(/gY&{+Q.opTs!RK+p16/H:|F');
define('SECURE_AUTH_SALT', '966,}]sS9aaw&E7~l?DF=q?S?R=p>dQy(?jQi^}jD[oa%|H#cuWwo}*l/I<z<m0q');
define('LOGGED_IN_SALT',   'WIH8f &YOa;|GIq8?/RzDgg%}&2.e>1r#lS6hbdV2FiBX8 k9YlUB.p^[_CSO$X^');
define('NONCE_SALT',       'FSxrt&!D$srj4DL?(~5wc^Na<7xF=o}UJ5v|9n59@npoEO8tn1cO,2$1GO ]N[ll');
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
