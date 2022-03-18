<?php

// Cryptographically Secure Pseudo-Random Number Generator

// rand() vs random_int()
// rand보다 random_int를 쓰는 것이 더 좋음
echo rand(1, 5);
echo random_int(1, 5);


// Create a random bytes
$bytes = random_bytes(32);