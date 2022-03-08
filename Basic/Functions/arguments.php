<?php

// Function with parameters
// 자료형을 선언해줄 수 있음 (안 해도 가능)
function foo(string $arg) {
    echo $arg;
}

foo('Hello, world');


// Default parameter
// default값은 인자의 가장 마지막 부분에 위치해야한다.
function foo2($arg = 'Hello, world') {
    echo $arg;
}
// 값이 선언되지 않으면 default값으로 출력
foo2();


// Define function with Rest parameters
function foo3(...$args) {
    var_dump($args);
}
foo3('Hello, world', 'Who are you?', 'Bye');


// Call function with Spread
function foo4($arg1, $arg2, $arg3) {
    var_dump($arg1, $arg2, $arg3);
}

$args = [ 'Hello, world', 'Who are you?', 'Bye' ];

foo4(...$args);