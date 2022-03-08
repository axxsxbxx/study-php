<?php

$response = [
    'name'       => 'PHP',
    'categoryId' => 0,
];

// foreach ($response as $value)
// $key 생략 가능
foreach ($response as $key => $value) {
    echo $value . PHP_EOL;
}

// 이차원 배열인 경우
$response = [
    'messages'   => [
        'Hello, world',
        'Who are you?',
        'Bye',
    ]
];

foreach ($response as $value) {
    foreach ($value as $msg) {
        echo $msg . PHP_EOL;
    }
}