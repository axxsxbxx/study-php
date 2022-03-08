<?php

// log level
error_reporting(E_ALL & ~E_NOTICE);

// send error log
// 파일로 로그를 보냄
error_log('Hello, world', 3, __DIR__ . '/logs/log.log');

// Backtrace
function foo() {
    // debug_print_backtrace();
    var_dump(debug_print_backtrace());
}

foo();

// Ignore Errors
function foo2() {
    asdfga;
}
// @ operator
// 디버거에서는 에러가 나지만 직접 실행하면 에러를 무시함
// 가급적 지향하는 것이 좋음
@foo2();

// Error Handling
// set
set_error_handler(function($errno, $errstr) {
    switch ($errno) {
        case E_USER_ERROR:
            var_dump($errstr);
            break;
    }
});
// reset
restore_error_handler();

// Trigger custom error
trigger_error('Hello, world', E_USER_ERROR);