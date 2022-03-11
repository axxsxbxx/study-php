<?php

// Get hash algorithms
hash_algos();


// Create a hash
echo $hash = hash("sha256", "Hello, world");
// echo $hash = crypt("Hello, world", "secret");


// Check a hash
var_dump(hash_equals($hash, hash("sha256", "Hello, world")));


// Hash Handler
$h = hash_init("sha256");
hash_update($h, "Hello, world");

echo hash_final($h);


// Hash-based Mesage Authentication Code
hash_hmac_algos();

$hash = hash_hmac("sha256", "Hello, world", "secret");
hash_equals($hash, hash_hmac("sha256", "Hello, world", "secret"));