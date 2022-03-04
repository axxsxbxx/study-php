<?php

// 변수 선언
$message1 = 'Hello, world';
$message2 = 'Who are you?';
$message3 = 'Bye';

// 배열 기본 선언
$messages1 = [
    'Hello, world',
    'Who are you?',
    'Bye'
];
$messages2 = array('Hello, world', 'Who are you?', 'Bye');

// Define Array with key
$messages3 = [
    0 => 'Hello, world',
    'message' => 'Who are you?',
    'Bye'
];

// Destructuring

// 배열의 첫번째 값 msg 변수에 할당
list($msg) = $messages1;
var_dump($msg);

// 두번째 값 할당받고 싶은 경우
// [ , $msg ] = $messages;
list(, $msg2) = $messages1;
var_dump($msg2);

// 키가 있는 배열의 Destructuring
[ 0 => $test1 ] = $messages3;
var_dump($test1);

[ 'message' => $test2 ] = $messages3;
var_dump($test2);