<?php

// base64 Encode/Decode
// Encode
echo $base64Encoded = base64_encode("Hello, world");
// Decode
base64_decode($base64Encoded);


// Get Headers (as HTTP client)
var_dump(get_headers("http://example.com"));


// Get meta tags (as HTTP client)
var_dump(get_meta_tags("http://example.com"));


// Build a query string
echo $queryString = http_build_query([
    "lang" => "php",
    "message" => "Hello, world"
]);


// parse URL
var_dump(parse_url("http://example.com?" . $queryString));


// URL Encode/Decode
echo $urlEncoded = urlencode("안녕하세요");
echo urldecode($urlEncoded);