<?php

// Sub String
echo strstr("http://example.com", "//") . PHP_EOL;


// Token
echo strtok("http://example.com", "//") . PHP_EOL;
echo strtok("//") . PHP_EOL;


// Slice
echo substr("Hello, world", 7, strlen("Hello, world") - 1) . PHP_EOL;


// Compare
echo substr_compare("Hello, world", "world", -5) . PHP_EOL;


// Replace
echo substr_replace("Hello, world", "Hi", 0, 5) . PHP_EOL;


// Count
echo substr_count("Hello, world", 'l', 0) . PHP_EOL;


// Wrapping
// true이면 엄격하게 적용
echo wordwrap("Hello, world", 5, "\n", true);
// false이면 유연하게 적용
echo wordwrap("Hello, world", 5, "\n", false);