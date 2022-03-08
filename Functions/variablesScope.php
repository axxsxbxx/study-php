<?php

// Access global variables
$message = 'Hello, world';

function foo() {
    // $GLOBALS['message'] = 'Who are you?';
    global $message;
    $message = 'Who are you?';
    
}

foo();
echo $message;


// Static variables
function foo2() {
    static $count = 0;
    return ++$count;
}

echo foo2();
echo foo2();
echo foo2();


// Closure
function foo3($arg) {
    return function () use($arg) {
        $arg = 'Who are you?';
        return $arg;
    };
}

$func = foo3('Hello, world');
echo $func();