<?php

// 논리 연산자 -- 결과값이 true 아니면 false로 나옴

// AND 연산자
// true and true; 도 같은 결과값
var_dump(true && true); // -> true
var_dump(true && false); // -> false

// OR 연산자
// true or true; 도 같은 결과값
var_dump(true || true); // -> true
var_dump(true || []); // -> true

// XOR 연산자
// 두 값이 다르면 true
var_dump(true xor false);

// NOT 연산자
var_dump(!true);