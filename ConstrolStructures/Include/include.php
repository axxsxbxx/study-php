<?php

// include(_once)
// 중복해서 작성하면 에러남
include 'HelloWorld.php';
// 아무리 중복해서 작성해도 에러나지 않음
include_once 'HelloWorld.php';

var_dump($message);
foo();

// require(_once)
// 파일이 없으면 에러를 발생시킴
require 'HelloWorld.php';
require_once 'HelloWorld.php';