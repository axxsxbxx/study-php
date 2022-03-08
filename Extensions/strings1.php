<?php

// Add slashes at quotes
// Add
$slashe = addslashes("'");
// Remove
echo stripslashes($slashe);


// Binary to Hex
$bytes = random_bytes(32);
$hex = bin2hex($bytes);
// Hex to Binary
hex2bin($hex);


// One way hash (Encryption) -- 복호화 불가
// sha1, md5는 권장하지 않음
echo crypt('Hello, world', 'secret');


// Split, Join
$url = 'http://example.com';
// explode -- 배열 반환
// var_dump(explode('//', $url));
$exp = explode('//', $url);
echo implode('//', $exp);


// HTML entities
$html = <<<'HTML'
<html>
    <body></body>
</html>
HTML;
// Encode
$encoded = htmlentities($html);
$encoded = htmlspecialchars($html);
// Decode
html_entity_decode($encoded);
htmlspecialchars_decode($encoded);


// Strip HTML Tags
// Strip하지 않을 태그 명시 가능
echo strip_tags($html, '<body>');


// \n to <br>
echo nl2br("Hello,\nworld");


// char
echo ord("A");
echo chr(65);


// Parse Query String
$qs = 'lang=php&addr=127.0.0.1';
parse_str($qs, $arr);

var_dump($arr);


// Number Format
echo number_format(123456789);


// Case
// Upper
echo strtoupper("Hello, world");
// Lower
echo strtolower("Hello, world");


// Remove spaces
// ltrim, rtrim
echo trim("  Hello  ");


// Replace
echo strtr("Hello, world", [
    "Hello, world" => "안녕하세요"
]);