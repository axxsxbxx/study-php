<?php

// 리턴 값
function foo() {
    return 'Hello, world';
}

echo foo();


function foo2(bool $is) {
    if ($is) {
        return 'Hello, world';
    }
    return 'Bye';
}

echo foo2(true);


// return variables
function foo3($arg) {
    return $arg;
}

echo foo3('Hello, world');