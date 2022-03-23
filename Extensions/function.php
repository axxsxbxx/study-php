<?php

// PHP에서는 오버로딩해서 함수 선언하면 오류가 발생한다.
function foo()
{
    // Get params number
    $argCount = func_num_args();
    switch ($argCount) {
        case 1:
            echo func_get_arg(0);
            break;
        default:
            var_dump(func_get_args());
    }
}


// Call
call_user_func("foo", "Hello, world");
call_user_func("foo", "Hello, world", 10);


// Check function exists
var_dump(function_exists("foo"));
var_dump(function_exists("foo2"));


// Get defined functions
var_dump(get_defined_functions());


// Call function when exiting script
register_shutdown_function(function() {
    echo "Exit";
});

