<?php

// for문
for ($i = 1; $i <= 10; $i++) {
    echo $i; // -> 1 ~ 10
}

// 배열에서의 for문
$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

for ($i = 0; $i < count($messages); $i++) {
    // PHP_EOL -- 엔터 처리
    echo $messages[$i] . PHP_EOL;
}