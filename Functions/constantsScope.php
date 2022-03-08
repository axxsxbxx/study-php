<?php

// constants scope
function foo() {
    define('MESSAGE', 'Hello, world');
    // 함수 내부에서는 const로 상수 선언 불가능
    // const MESSAGE = 'Hello, world';
}

foo();

echo MESSAGE;

// callbacks
// 상수는 use 없이도 사용 가능
$foo = function () {
    return MESSAGE;
};

echo $foo();