<?php

// Filter
var_dump($message = filter_var("Hello, world", FILTER_SANITIZE_STRING));
// 암묵적으로 string으로 변환해준다.
var_dump($message = filter_var(10, FILTER_SANITIZE_STRING));
var_dump($message = filter_var(true, FILTER_SANITIZE_STRING));

var_dump(filter_var("example@google.com", FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL));
var_dump(filter_var("example*google.com", FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL));

echo $message = filter_var("Hello, world", FILTER_CALLBACK, [
    "options" => function ($value) {
        return $value;
    }
]);


// Fix
echo filter_var("<html><head></head>/html>", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


// Has
echo filter_has_var(INPUT_SERVER, "REMOTE_ADDR");


// Request
// $_POST, $_GET, $_COOKIE, $_SESSION, $_SERVER, $_REQUEST
$_ENV["REMOTE_ADDR"] = "127.0.0.1";
echo filter_input(INPUT_ENV, "REMOTE_ADDR");
echo filter_input(INPUT_SERVER, "REMOTE_ADDR", FILTER_VALIDATE_IP);

if (array_key_exists("REMOTE_ADDR", $_SERVER)) {
    filter_var($_SERVER["REMOTE_ADDR"], FILTER_VALIDATE_IP);
}


