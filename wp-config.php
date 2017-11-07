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
define('DB_NAME', 'escuelaupa.git');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '7;Cf4PgorV-vWd9N-R^SljzCP!r~stEH|M,~SR88f,tw6HCf#RN[Pqd(NQ>uF/DA');
define('SECURE_AUTH_KEY', 'e C<Q+G[>6Ks?-vMACDe.HgA#CFM[i_ubU:wSP>v%W8<a{IXf0FQZw-.PWj?~&+,');
define('LOGGED_IN_KEY', '-j B^LCwyt0P1dt$7/ktIllO BSu/XcfDa:@cg3H_b7eB%>j0*p+8~&3pjSF,b?:');
define('NONCE_KEY', '<S?>cR*1j*SrjTPZ9K|Z;U5 Xz%{B#cmgni,cL}vse;h@ye{BF#>Y)V(`Q189=j~');
define('AUTH_SALT', '<n&@FN=`H?HKXeP&B)O=z317^?0QNp;q9iw2LYHJ-v.8X7GqB.a;S,Iam@GuFZ/,');
define('SECURE_AUTH_SALT', '<!B~;,FE9Qi4]:Bk|m1 Q:z<2<1ELcyP=kH&*V6QG#;/6$3x=@y)DEPl6hu`&FCk');
define('LOGGED_IN_SALT', '1vR;o+^[ YL8R-qZ~$v3h[W;9* nLT=P}Iin&3YE:/yMRaRI3$^I4wZ{}=mX(>n*');
define('NONCE_SALT', '}2,TevO5TG[:{O: h_i7+Y s_XM*Qq$7=-j9TLKu/HP4YVn%2g%~,huaF#ob0TRZ');

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

