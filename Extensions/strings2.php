<?php

// Print formatted string
printf("%s", "Hello, world");
printf("%d", 1234);
printf("%.2f", 14.24);

$message = "Hello, world";

printf("%s, %d\n", $message, 10);
printf("%s, %d", ...[ $message, 10 ]);
// 배열을 받을 수 있음
vprintf("%s, %d", [ $message, 10 ]);

// Buffering
$message = 'Hello, world';
// sprintf는 결과를 리턴한다.
$buf = sprintf("%s", $message);
sprintf("%s, %d", ...[ $message, 10 ]);
echo vsprintf("%s, %d", [
    $message, 10
]);