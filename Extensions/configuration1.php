<?php

// PHP Extension
var_dump(extension_loaded('mbstring'));
var_dump(get_loaded_extensions());

// include Path
// 자동적으로 path 붙여줌
set_include_path(__DIR__ . '/mylib');
// get
var_dump(get_include_path());
// reset
restore_include_path();

// Get included files
var_dump(get_included_files());

// Get php information
phpinfo();

// php.ini
// set
ini_set('session.gc_maxlifetime', 1440);
// get
var_dump(ini_get('session.gc_maxlifetime'));
// reset
ini_restore('session.gc_maxlifetime');

// Environment Variables

// Case 1. put, getenv
// set
putenv('APP_ENV=' . 'production');
// get
var_dump(getenv('APP_ENV'));

// Case 2. $_ENV
// set
$_ENV['APP_ENV'] = 'development';
// get
var_dump($_ENV['APP_ENV']);