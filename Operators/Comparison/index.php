<?php

// 비교 연산자
// <, >, <=, >=
// 문자열 비교도 가능

var_dump(10 == '10');
var_dump(10 === '10');

// 10 <> 20
var_dump(10 != '10');
var_dump(10 !== '10');

// 10이 20보다 크면 1, 같으면 0, 작으면 -1을 반환
var_dump(10 <=> 20);

// 6과 20을 비교하게 됨
var_dump('6x' < 20);