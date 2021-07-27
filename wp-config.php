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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shop' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'ufKb^=@eC]~,@]<PiwpK9_5Oc1o!vgq>$F>Q`}iO)%DF&fLJ*_:=JYTirmw)8Ja/' );
define( 'SECURE_AUTH_KEY',  '&KhONMr@oFH5Wkry>(G|siU +9.Sq;&7jRW6fh?,3) n93W{V,b1wLp9tG=]4c l' );
define( 'LOGGED_IN_KEY',    '()H(X-<15}9NKJ{@)>>`|((S@dk]VX%oyQ^2!#E1^k>b60i?HJmt1y~WW!#RVcn$' );
define( 'NONCE_KEY',        '|i+@_3=5xe+w$]=f)gbhG,HV=Tza;KB;(sv_i!A)&X>a;c|aF>f8Gozz1>@(3e:n' );
define( 'AUTH_SALT',        '4+BZ:WkCA/r?J+otE0+*&J(N7mI+vJ{m}W<}xTaD!pYS2<H)?#&,<%{:{YJ,Z[yI' );
define( 'SECURE_AUTH_SALT', 'm1B%kezl-:8Pt%>c MjEGjt2tGdbMbYO>OvA6mIE`-7R>;m}Ce=jv*xOpC{Ld66S' );
define( 'LOGGED_IN_SALT',   '}lByB.pS$$(3f[PV.E0]XRQh]~]vOPxH_` vP:6(S,aM[wmdc;Q~l/dC [5J3h`p' );
define( 'NONCE_SALT',       '_SLyL&{Ahkqq{v*1]%R2_zk*s4<P(?YbwNYv4kZ_@>+mN=,2 }#WoHgybXV+xDN^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
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
