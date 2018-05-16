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
define('DB_NAME', 'nativing');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'sf<<ClcU:9-@Ow8i.1m:1~KYM#lclT{+yrGJ:W[jMFMbrki)j5:%H/]GH7eZq1=A');
define('SECURE_AUTH_KEY',  'y0,jsR~*sp>vuGxWo:2fWe3,1[{4S*V exAT+&Os&1]WU$4_wR_O%kE|0N~9@0Ky');
define('LOGGED_IN_KEY',    'C(R2o)o<=!rt`SpxuQ]5G*=0g0Ckh/n]eJ?)i`p 9(]$+Lpgptlk1[#0[$Xy%m_ ');
define('NONCE_KEY',        'jQl$uOkIf7]&n<dMY#!F]vMAA22qy/NVeWlocHMbO/5(w&A9:x:gjD7d{3Z:zm{t');
define('AUTH_SALT',        'F,nWR/R{%aVw(7P *Fhbhz=[ZDCT2_UWdwKG`~|cvD!qMk#z;D$JxkY`_#Z-8R6d');
define('SECURE_AUTH_SALT', '&&M{GhtH|{w2}fYqNCK<(hC)Qhz{SVdNF6Ka,igr6w:Fe3R!yf^cmV!4yOf9(`AM');
define('LOGGED_IN_SALT',   'yU[)^.&qzdF-^d:EWR&t;+RT7QDNvH63fdTGxG#O^6?S{18uTg?1Cwe^;eV?H)6[');
define('NONCE_SALT',       'ey@!Z|40,#Q08(nD@QOS(MxWauw-L5<)]Tt+;TJ@8zQ_>E0H]^}{3j4|lUA1&yxf');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');