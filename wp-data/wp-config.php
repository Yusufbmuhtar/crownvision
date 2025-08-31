<?php
/** WordPress için veritabanı ayarları */
// Environment variable’lardan çekiyoruz, secret push edilmeyecek
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
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

/** WordPress dizinini belirt */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını ayarla */
require_once(ABSPATH . 'wp-settings.php');
