<?php

// Absolute
echo abs(-1);


// Floating Point
// 올림, 내림, 반올림
echo ceil(6.7);
echo floor(6.7);
echo round(6.56, 1);
echo round(6.56, 0);


// hex -> dec
echo $hex = hexdec("F");


// Max, Min
echo max(range(1, 5));
echo min(range(1, 5));


// a^b
echo 2 ** 4;
echo pow(2, 4);


// Create a random int
echo rand(0, 10);


// Square root
echo sqrt(16);