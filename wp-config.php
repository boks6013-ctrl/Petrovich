<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite10' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admini' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*Z.ON5f*wpZSf1.^{a4|]!vd<Nvt11FI>$NDVkWE2v]>EU~(ayQ1w6.Lj@N&hl{.' );
define( 'SECURE_AUTH_KEY',  '0b|+8V:EbI3Pe,-RpovICJ(Z=Mf9+4[h1^-nmubr]?8k`pJZ^$h/=lAA`i8{,i8J' );
define( 'LOGGED_IN_KEY',    '4XJ|58oKM|#K[%v8l}+s)ai$<QF8DMkz:{d^gV9 X0D&H`e0zGaT(bWqhe5CNyt.' );
define( 'NONCE_KEY',        'o xuE05]T>>Vf4X0;q2_7Ma&XI}yZx]5heYmY:K`%[&Y^u-^mYne1!IU.`yWx;xi' );
define( 'AUTH_SALT',        'YF77<eKKx*Z6K!`yF*Dn{)Bz8%i<=@JJW*5!IdZ+>mt:dVeZ[)^Q-=R+7`8My=uw' );
define( 'SECURE_AUTH_SALT', 'gk2%+Sa(BDW}a`rp;l:#Gt+e6JSEBwj?t=R!2N*[9}gW {N6<2RkueP[AAdQ]Zl_' );
define( 'LOGGED_IN_SALT',   'M*PojvBJGQW-UqKwh=E[{^j tulP9kfTYbXIdt$8nJuQ*af1Dg#^q1n5l4LiQT`m' );
define( 'NONCE_SALT',       '7l+9%t[j,_*I7<f[,_Vg[&bRB?!5-VZ*{V{.i)LvO<q<zeA+g-Lp5;gmxTT}V/f8' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
