<?php

// Set session save path
session_save_path("./sessions");


// Start a session
session_start();


// Set session value with key
$_SESSION["mySession"] = "Hello, world";
echo $_SESSION["mySession"];


// Get session id
session_id();


// Get session name
session_name();


// Run GC(Garbage Collection)
// 세션의 유효기간이 만료되면 가비지 컬렉션을 통해서 파기시켜줘야한다.
session_gc();


// Set/Get session cookie info
// 쿠키 수명 지정
session_set_cookie_params(1440);
var_dump(session_get_cookie_params());


// Remove a Session value
unset($_SESSION["mySession"]);


// Reset Session
session_unset();


// Remove Session file
// 권장하고 있지는 않다. 가비지 컬렉터 돌리지 못하는 경우에 사용.
session_destroy();


// Get session status
session_status();


// Close session
session_commit();


// Regenerate session id
// session id 노출되어서 보안에 위협이 될 것 같은 경우 (ex. 다시 로그인 하는 경우)
session_regenerate_id();