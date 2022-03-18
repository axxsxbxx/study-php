<?php

// Create a hash value for password
$hash = password_hash("Hello, world", PASSWORD_DEFAULT);
// $hash = crypt("Hello, world", "secret");


// Verify password hash
var_dump(password_verify("Hello, world", $hash));
// var_dump(hash_equals($hash, crypt("Hello, world", "secret")));


// Get info
var_dump(password_get_info($hash));


// Rehash
$hash = password_hash("Hello, world", PASSWORD_DEFAULT, [
    "cost" => 10
]);

$options = [ "cost" => 11 ];

var_dump(password_needs_rehash($hash, PASSWORD_DEFAULT, $options));