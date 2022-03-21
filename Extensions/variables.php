<?php

$message = "Hello, world";

// Type
// 타입 확인하기
echo gettype($message);

// 타입 설정하기
settype($message, "int");
echo gettype($message);

// 타입 체크하기
echo is_int($message);
echo is_string("Hello, world");
echo is_iterable([]);


// Value check
echo isset($message);

$message = null;
echo empty($message);


// Convert to
var_dump(boolval(0));
var_dump(boolval(10));
var_dump(strval(10));


// Print
$var = [
    "message" => "Hello, world"
];

// For reading
print_r($var);
// For debug
var_dump($var);
// For expression
var_export($var);


// Serialize
$serializedArray = serialize($var);
echo $serializedArray;

$arr = unserialize($serializedArray);
var_dump($arr);


// 변수 할당된 메모리 해제
unset($arr);


// Get defined
// 선언된 변수 확인
var_dump(get_defined_vars());
// 선언된 상수 확인
var_dump(get_defined_constants());


// 상수
const MESSAGE = "Hello, world";
echo defined("MESSAGE");

if (defined("MESSAGE")) {
    echo constant("MESSAGE");
}