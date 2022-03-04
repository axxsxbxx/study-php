<?php

// PHP 7.4에서 추가된 내용
// spread operator를 이용한 배열 내용 추가
$messages = [
    'Hello, world'
];

$messages = [
    ...$messages,
    'Who are you?',
    'Bye'
];

var_dump($messages);