<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'haber_sitesi' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'swxw? U!LW^sU4F]&f@Co*zG2$ K1kd6Pg@}w?SW>aGS;lXy}M$iA4aotin6bkMl' );
define( 'SECURE_AUTH_KEY',  'ILBmh=Zo4#*AE>sDKuAd#{>Lmn=]7tGuVJNJW!7H<FU_7{.1?Z}LFxMnd/-9Uv ;' );
define( 'LOGGED_IN_KEY',    '<O&fM0RY;9Nl0uGLEY.#f0$Nm+|u.[4vz1/-rIs@sf#VaOIx{m<?pBbMmLFJ)ei ' );
define( 'NONCE_KEY',        'R{R)i/uE:5m6*5Tsg?vu+]bKg)k9Sf<JRW>9p%yXG.re@E1nrga}M^}<^IbkZI$s' );
define( 'AUTH_SALT',        '>BjWYXbVM8Xxza;.wD>$R]flmoiNmm3Hn:d!TA^{[yX=6/Lfkq3 KUzpBkvWd|wj' );
define( 'SECURE_AUTH_SALT', 'O=Z:>e[ QUjzoGlTwElpG(rEN}x_98nHb/?h47<M2u*x&}KjzEjIg-vaul-f]Uq:' );
define( 'LOGGED_IN_SALT',   'dhj9j;(H~0X5mp56;.]8>MZ6h]=w&[)& ZYoYFS]v.Vnj:+b`d&hx-uXi6UIOp#K' );
define( 'NONCE_SALT',       'JV8)L!7*+,wWD;/AKTQ.-m=}U-|zN9fPVav(!ErWrti/{NeTB^T@N/@LDhw(9p*1' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'hs_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
