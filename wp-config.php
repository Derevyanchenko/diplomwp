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
define('DB_NAME', 'diplom');

/** Имя пользователя MySQL */
define('DB_USER', 'diplom_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qwerty123');

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
define('AUTH_KEY',         '?[@oy+yY T*GqH1>lK6 raJK>[uy0Qi -8V+ 6@MdcHo[*Fa@x#Kk+[b&W1aC9QM');
define('SECURE_AUTH_KEY',  'h==WO}DU6SC&EXR6i37yfiCZ))C==uhpnLAG+IStjHH.nBFb)@<qGPo=-[++K@oG');
define('LOGGED_IN_KEY',    '_ebAv2|7ZYUB,%nE^vwP&tm+xn 5)>E0K]b/xX^M:pHYPcP>!(g^/e)tY,*d1Scr');
define('NONCE_KEY',        'N6Uoq%mnc:Tr//#`-<>@RF?<(hg+lX#w2@FD f(sE-g-/[<*(5T)<^~#P_?Jk,tq');
define('AUTH_SALT',        'Vb:sWNeB,@EV][yCww_B/jwqy&olG^a]8XN=EO)ZL9&zqsSvY6WJV xOCc7O*Qv|');
define('SECURE_AUTH_SALT', 'ciQ4tm/UDzo[$l2<MEDm *)-cE+8r @iiLnUm9KstCN36ZFy|lh]D8 )]IX8Gpw!');
define('LOGGED_IN_SALT',   'EiJ5D2}37{XQCfFaWsG>HYyZ<B,<2<IJ]jq-Ji1ZX QMbuG*2#S9dt|7q[F)C9M}');
define('NONCE_SALT',       '.MB~U{UKbPYMyzHje$Iwc-M|NYM)5~UUEDEI2f</? {fe8JnkH?M*Ug?!7~_}g[f');

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
