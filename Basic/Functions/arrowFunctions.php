<?php

// arrow functions
$message = 'Hello, world';

function foo($callback) {
    echo $callback();
}

// foo(function () use ($message) {
//     return $message;
// });
foo(fn() => $message);

$fn = function ($var) {
    return 'Hello, world';
};
// arrow function은 한줄표현만 지원
$fn = fn($var) => 'Hello, world';