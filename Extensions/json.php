<?php

// Encode
echo  $jsonEncoded = json_encode([
    "message" => "Hello, world"
]);


// Decode
var_dump(json_decode($jsonEncoded, true));