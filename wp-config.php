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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'u4aaGFL4RPFciRQ' );

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
define( 'AUTH_KEY',         '}[V$7NQt3#[Jp>E81ZexxpNH8<@k- s6.Kbm^bt8b]%SbB*^uohV>VMf(*[=T%yC' );
define( 'SECURE_AUTH_KEY',  'Q35<BrPU;GSan.6a}fiC4~+4s^{pdqSJ$M,:w3gd4l>_YQMz;m?[v8C#WVnYd7F4' );
define( 'LOGGED_IN_KEY',    '(9$3q9/6{s)%l#S*i+,58 AyIOb(jVzCw/iN`i/|{{<W{m{^8lz6wC#MvYVcp>.o' );
define( 'NONCE_KEY',        'Tdck2=Yd]bY9[@+9O%Xsty)vaAN+-HNrx*D>S-B7l#lA8s6I4p+&^r5hsU~|zDV#' );
define( 'AUTH_SALT',        '/`}2Z(T.t+anM8~ZUlQJNv{?cgDebr;~h@~Z[M}uT&qJ|/=m*`=TSzikOv0AvK1c' );
define( 'SECURE_AUTH_SALT', '442?yZ{(Lis,:3d[eg*P9v52JfUnbUf8xT,c`!ixst>#}HYhK2Sf:bx5MEzA*j-2' );
define( 'LOGGED_IN_SALT',   'lzMyyZb~iH:eHv_dVa$1be9~JdBk;;vix+(JQQ hs,Y=zXk8o1RN)SA?P.,zlW4i' );
define( 'NONCE_SALT',       'Y[kMtuA&0Fj/<V`c-%l:sO:~bK9Xex9TqCTs m9?@GRdY$PB2TXDR8u%>`@/v&Md' );

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
