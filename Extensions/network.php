<?php

// HTTP Header
// Set
header("X-Header: Hello, world");
// Remove
header_remove("X-Header");


// HTTP Response Code
// Case 1. http_reponse_code
http_response_code(200);
// Case 2. header
header("HTTP/1.1 404 Not Found");


// Cookie
setcookie("myCookie", "Hello, world");


// Get a Cookie
// 쿠키를 set하는 시점에 바로 할당되지 않는다. 
echo $_COOKIE["myCookie"];


// Remove a Cookie
setcookie("myCookie", "", time() - 3600);