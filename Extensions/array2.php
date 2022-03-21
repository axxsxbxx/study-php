<?php

// Sort by value
$numbers = range(1, 5);
sort($numbers);
var_dump($numbers);

rsort($numbers);
var_dump($numbers);


// Assoc by value
$arr = [
    "r" => "Bye",
    "c" => "Who are you?",
    "a" => "Hello, world"
];

asort($arr);
var_dump($arr);

arsort($arr);
var_dump($arr);


// Sort by key
ksort($arr);
var_dump($arr);

krsort($arr);
var_dump($arr);


// Sort by callback
usort($numbers, function ($a, $b) {
    return $a > $b;
});
var_dump($numbers);

uasort($arr, function ($a, $b) {
    return $a > $b;
});
var_dump($arr);