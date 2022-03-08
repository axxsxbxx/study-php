<?php

// First class function
$foo = function () {
    echo 'Hello, world';
};

echo $foo();

function foo($callback) {
    echo $callback();
}

foo(
    function() {
        return 'Hello, world';
    }
);

// 고차함수 -- 함수를 리턴
function foo2() {
    return function () {
        return 'Hello, world';
    };
}

$func = foo2();
echo $func();