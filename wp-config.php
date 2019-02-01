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
define('DB_NAME', 'h901109683_db');

/** Имя пользователя MySQL */
define('DB_USER', 'h901109683_koko');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'kokoKO11');

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
define('AUTH_KEY',         '(:, A1AQm$&wv(.mAvLJ;JO=nN$jo)X3(^SKQg/+<2~[T07Iwc} { ?Qv`LBF3RC');
define('SECURE_AUTH_KEY',  ';/tI]d3S5K.a#{Yt5S)xtF6)Z,HTAAyBlDu.]O~TvDA|+mmQLb (vg8!P[/GYFGq');
define('LOGGED_IN_KEY',    '%9h}R1<nM]~VKe3vRzV>Gnydj1I_Q*O,0<bAL3c6XpvIcRt#v2~D=)HcS:*MwHox');
define('NONCE_KEY',        'Vv9$+u!Ks`^gvLo2m?Y|Z)dkY[U4Q|;x,fJ6.OBLqVnWvTlNY92J>mM,!TLl5NK!');
define('AUTH_SALT',        'HkXvruW0rWK9uOPHC5]&39vtSzT>Hgnz`whMaTG!uIYc&I!Mcr<0~7/Go ^Pz]:m');
define('SECURE_AUTH_SALT', 'm;e_U/x=u#M$f6064U7^N+;p:Z|AyJm-;9@|!^I5{5mEB `($9x+%1@1JQR%E:4X');
define('LOGGED_IN_SALT',   'AGr]D2oh:3 X KP!G 57M73R1Z%AL-+2so?YYqNj@8#BYi%$0ZSo&;6`5>E?iadv');
define('NONCE_SALT',       'WsA{p+g~%Nq6Z+GgRL/U^?~eTdPn~C7!bH!0(h@jh().vq[`cHPXx>ZR+TRK[5/t');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ko_';

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
