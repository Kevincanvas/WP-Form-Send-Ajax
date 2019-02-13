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
define('DB_NAME', 'wp_test');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'fo5$D2./ZV#r&v6( h?L]B8(doA]xs@X~E$&873^@%z:@^Y<* y}mci7tc.P`-!}');
define('SECURE_AUTH_KEY', '21Uns1AeFYwF) LjxQ9Anib}`rr(t&u^h%l/p/5]E|Dv431)32bB<]{Ydo IW~jm');
define('LOGGED_IN_KEY', '/`l>-~rTKevSa6rqeHAF#w=yKEU Pj<R|0~3A<Dbp$6D|E[%z&z8:dAc.4*;ST8]');
define('NONCE_KEY', 'j6WIoWh2CeSNLTnK$CKLY[xgm<iyj7E*0-PwVnijvk0ysc+/){X4CPZuhA(HhP0M');
define('AUTH_SALT', '~tIm(<LyV33y_-,>O:TzG7xOUZb~.W^a@xK)x%*qKYyV^j1o1jVN9R3F%/jFaS?<');
define('SECURE_AUTH_SALT', '/VPsC*KO,:a>AKQM@bVhJz-pK(9gf7IjK|}ITy)$-uk{1#IV&a/}_v{O(fxJov!?');
define('LOGGED_IN_SALT', 'Q!J1&Gi/E=*$+HBSGA[,_un;#d/KR@5:#G}&`hbx5@!6a^9]Mz 7i?c|Rv{_c>(t');
define('NONCE_SALT', 'OM-{VLm,`A(v}+F1|oZ0!&8m2W&zJEfkBa!~EzZF1`_+E i6c^ou4tmqKCyJz8yI');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

