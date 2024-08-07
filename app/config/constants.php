<?php
defined('BASEPATH') or exit('No direct script access allowed');

defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', TRUE);

defined('FILE_READ_MODE')  or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  or define('DIR_WRITE_MODE', 0755);


defined('FOPEN_READ')                           or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
defined('EXIT_SUCCESS')        or define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          or define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         or define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   or define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  or define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     or define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       or define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      or define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      or define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

define('BASE_URL', (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . '/core/');

define('THEME', 'metronic'); // for theme
define('LAYOUT', 'main'); //for layout/main.php
define('HEADER', 'header');
define('SIDEBAR', 'sidebar');
define('BREADCRUMB', 'breadcrumb');
define('FOOTER', 'footer');
define('SEARCH_UI', 'search-ui');
define('ASSETS', 'assets/' . THEME);
define('ASSETSGENERAL', 'assets');
define('LOGIN', 'login');

define('JS', BASE_URL . ASSETS . '/js');
define('CSS', BASE_URL . ASSETS . '/css');
define('FONT', BASE_URL . ASSETS . '/font');
define('IMAGES', BASE_URL . ASSETS . '/images');
define('MEDIA', BASE_URL . ASSETS . '/media');
define('PLUGINS', BASE_URL . ASSETS . '/plugins');
define('GENERAL_FILE', 'js-core/general.js');
define('LOGIN_AUTH_FILE', 'js-core/loginauthadmins.js');
define('DATATABLE_PLUGINS', PLUGINS . '/custom/datatables/datatables.bundle.js');
define('CKEDITOR_PLUGINS', PLUGINS . '/custom/ckeditor/ckeditor-classic.bundle.js');
define('JS_GENERAL', BASE_URL . ASSETSGENERAL . '/' . GENERAL_FILE);
define('JS_LOGIN_AUTH', BASE_URL . ASSETSGENERAL . '/' . LOGIN_AUTH_FILE);
define('JS_USERS', BASE_URL . ASSETSGENERAL . '/js/users.js');
define('JS_OWNER', BASE_URL . ASSETSGENERAL . '/js/owner.js');
define('JS_CORE', BASE_URL . ASSETSGENERAL . '/js');
define('HELPERS', 'metronic');
define('VALIDATION_MESSAGE_FORM', 'fv-plugins-message-container invalid-feedback');

//Vzuu FrontEnd
define('THEME_FRONTEND', 'frontend');
define('ASSETS_FRONTEND', 'assets/' . THEME_FRONTEND);
define('PLUGINS_FRONTEND', BASE_URL . ASSETS_FRONTEND . '/plugins');
define('CSS_FRONTEND_GLOBAL', BASE_URL . ASSETS_FRONTEND . '/global.css');
define('CSS_FRONTEND', BASE_URL . ASSETS_FRONTEND . '/css');
define('IMAGE_FRONTEND', BASE_URL . ASSETS_FRONTEND . '/img');
define('VIDEO_FRONTEND', BASE_URL . ASSETS_FRONTEND . '/video');
define('JS_FRONTEND_GLOBAL', BASE_URL . ASSETS_FRONTEND . '/global.js');
define('LANDING_PAGE', 'frontend');
define('HEADER_FRONTEND', 'header');
define('FOOTER_FRONTEND', 'footer');
