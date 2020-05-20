<?php
define( 'WP_CACHE', true ) ;
/**
 * Setările de bază pentru WordPress.
 *
 * Acest fișier este folosit la crearea wp-config.php în timpul procesului de instalare.
 * Folosirea interfeței web nu este obligatorie, acest fișier poate fi copiat
 * sub numele de „wp-config.php”, iar apoi populate toate detaliile.
 *
 * Acest fișier conține următoarele configurări:
 *
 * * setările MySQL
 * * cheile secrete
 * * prefixul pentru tabele
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Setările MySQL: aceste informații pot fi obținute de la serviciile de găzduire ** //
/** Numele bazei de date pentru WordPress */
define( 'DB_NAME', 'expert_negotiators' );

/** Numele de utilizator MySQL */
define( 'DB_USER', 'root' );

/** Parola utilizatorului MySQL */
define( 'DB_PASSWORD', '' );

/** Adresa serverului MySQL */
define( 'DB_HOST', 'localhost' );

/** Setul de caractere pentru tabelele din baza de date. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Schema pentru unificare. Nu face modificări dacă nu ești sigur. */
define('DB_COLLATE', '');

/**#@+
 * Cheile unice pentru autentificare
 *
 * Modifică conținutul fiecărei chei pentru o frază unică.
 * Acestea pot fi generate folosind {@link https://api.wordpress.org/secret-key/1.1/salt/ serviciul pentru chei de pe WordPress.org}
 * Pentru a invalida toate cookie-urile poți schimba aceste valori în orice moment. Aceasta va forța toți utilizatorii să se autentifice din nou.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vOF62(U:y@z1n*1A|T}qvLXl>cSz8B3WKq(W1,hn[nXP|DdX,!]jO=_4kM,Fm!EC' );
define( 'SECURE_AUTH_KEY',  '!cQJF@j.75?ntYrN(+,<M<vzQIXbF%H<cn]zpnA(:0}Z}O4w/{$WXlWjxZKKQ/b^' );
define( 'LOGGED_IN_KEY',    'mSPISX-q(vGEZI]%j^ N~_{7NN<ePX=b]& r[]&I45Zm|g@(NSN-B,=-y(W/->YN' );
define( 'NONCE_KEY',        '!;. Y3cn3S$:~k^U]myrqXDT`bII*{$ $!WN7d<S&x K:njO2z!??gGQ7^RvGUMw' );
define( 'AUTH_SALT',        '}Qy~DbDgI!UxSuE0EyyVI8*1QPQ9%CiI&TbMa65U.n**Eqx|1Eq9]ibazGJ|6H2g' );
define( 'SECURE_AUTH_SALT', '`Y^~s{G}+j2+m$E-V#ka!XmDd<3#udQUfaW1Bj?MJy5lTy9L~deJEZ:mMoBt7Nmi' );
define( 'LOGGED_IN_SALT',   'WHx1T?*-`W<[#Qy*R]G~-C8Bp%J:fL^4!>*a,ZLv5aA&kU:,yy4W#3Uao_dn {&s' );
define( 'NONCE_SALT',       'u6xA<q<j.R?`f}`2sFp~|lW-FgY,Uj7vdj|63c!<W/~%*RD$yY@|Li5Bwoyq ^mZ' );

/**#@-*/

/**
 * Prefixul tabelelor din MySQL
 *
 * Acest lucru permite instalarea mai multor instanțe WordPress folosind aceeași bază de date
 * dacă prefixul este diferit pentru fiecare instanță. Sunt permise doar cifre, litere și caracterul liniuță de subliniere.
 */
$table_prefix = 'wp_';

/**
 * Pentru dezvoltatori: WordPress în mod de depanare.
 *
 * Setează cu true pentru a permite afișarea notificărilor în timpul dezvoltării.
 * Este recomadată folosirea modului WP_DEBUG în timpul dezvoltării modulelor și
 * a șabloanelor/temelor în mediile personale de dezvoltare.
 *
 * Pentru detalii despre alte constante ce pot fi utilizate în timpul depanării,
 * vizitează Codex-ul.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Asta e tot, am terminat cu editarea. Spor! */

/** Calea absolută spre directorul WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Setează variabilele WordPress și fișierele incluse. */
require_once(ABSPATH . 'wp-settings.php');
