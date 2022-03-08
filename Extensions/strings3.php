<?php

// replace
echo str_replace("Hello", "Hi", "Hello, world");


// repeat
echo str_repeat("*", 5);


// split -- 배열 반환
var_dump(str_split("Hello, world", 3));


// Word Count
var_dump(str_word_count("Hello, world", 0));


// Compare
// 같으면 0, 크면 1, 작으면 -1
echo strcmp("Hello, world", "Hello, world");
echo strcmp("Zello, world", "Hello, world");
echo strcmp("Aello, world", "Hello, world");


// Postion
echo strpos("Hello, world", "o");


// First Position
echo strpbrk("Hello, world", "o");


// Length
echo strlen("Hello, world");


// Reverse
echo strrev("Hello, world");