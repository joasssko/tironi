<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'tironi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'tironi');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'tironi');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Lp88]&MuB]P@3Hif0C<2T,6pnA34?6a5HyQ|f^oaZ B(iQPzHZ5AW$[-ov-g13.|'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'H *O2N|B3`:f]+(9x3{&3b*qTzmv-?2pl&:I8r>RpOx@uA.&C}C?~o,xCSL?]##X'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'GJR3@9!^!*c0=pNH2kq4q:|Cn}.h3:I!_tyic&G0 eJLv=V~l<|^}Ch~+w/,FABx'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'kVyE>J{KzsXv,CoWejex.8!~.PrL_|th~gMIE.W,Q870z|Y?MKT5zm0e*y[0,J0f'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'fv;]bi/)d4;@d+2~J^Eo-IU-M=jNT|m6X@e^lJ=g8PC F1l89gtlj|.:_SN=]I:I'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'I9 ]{2k(AcL:Su|>#sB]Qi*^t|<biPHg5O2a%[r<[icl&$zg)N-MTRUw+Gypcuv8'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'Oq@|{dKT8_I4Pe9FfO(}ykk;}|3hAdm0D&aHm~_|A,d|>eJH_gr?xgV$V+5<~ch^'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '|A$p2*`0T|b.&G6X^ohnPJ63YZsy6HO5GpBleQ,/BdXfnZ|cxYp!{[HUB2(0-,c;'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'trn_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

