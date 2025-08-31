<?php
/** WordPress için veritabanı ayarları */
define('DB_NAME', 'wpdb');
define('DB_USER', 'wpuser');
define('DB_PASSWORD', 'wppassword');
define('DB_HOST', 'db:3306');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/** Benzersiz anahtarlar ve tuz değerleri */
define('AUTH_KEY',         'rastgele-bir-deger');
define('SECURE_AUTH_KEY',  'rastgele-bir-deger');
define('LOGGED_IN_KEY',    'rastgele-bir-deger');
define('NONCE_KEY',        'rastgele-bir-deger');
define('AUTH_SALT',        'rastgele-bir-deger');
define('SECURE_AUTH_SALT', 'rastgele-bir-deger');
define('LOGGED_IN_SALT',   'rastgele-bir-deger');
define('NONCE_SALT',       'rastgele-bir-deger');

/** Tablo ön eki */
$table_prefix = 'wp_';

/** Hata ayıklama modunu aktif etmek için true yapabilirsin */
define('WP_DEBUG', false);

/** Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizinini belirt */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını ayarla */
require_once(ABSPATH . 'wp-settings.php');
