<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'c2domosed1');

/** Имя пользователя MySQL */
define('DB_USER', 'c2dms');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'kizdomosed');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~f4wP_ }VuVY-CQtP+[3dy2wat0|%+RNPwEQKNQ(3SE?f)KlWMZM&U:NFnz%HdKo');
define('SECURE_AUTH_KEY',  '@Dl%VT9b@OY_HA9qp!81.iwJ|=Q?jTeEVe<D|J12q~*&z*|@?y$hUo^!Z1l+$d>{');
define('LOGGED_IN_KEY',    'O{f/SQ%&pa$kCa(gM)sx0`wdu=|rz}mheIvn|Q1jq}T-)_2NJ]0 /p//<~!Kfsa+');
define('NONCE_KEY',        ' &-!_p|U.i>d_Gqu+?+%PBjL)wM]$0z;-zt4g<l/8C:ioV+`xv*lW*@X//k<9^`x');
define('AUTH_SALT',        'D02vi<~L#,$^/bK|JbVf|0mV}]m O!4J)0mb>Q.|B>0ciU:,!oDT2D(ZRE,qOa}i');
define('SECURE_AUTH_SALT', 'OX:e/4^988q/j6s{n,9f`lb*|u=7xbmL/t7J8e/h|G]J*E~*OuXQf?:?|O`!}jLR');
define('LOGGED_IN_SALT',   'Nxd~1a?V<vrf+,^z`&9A[N`U,oUw#QZ$- )fYC$|2}pOJLjug4tN<McA:k6wiZ p');
define('NONCE_SALT',       'Snj~:W:DFYU$v(yw2zq.w[pm3+tSj.fXJ-nI._}xd9hM~1P?0`&G!3fNe<wtT@7u');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
