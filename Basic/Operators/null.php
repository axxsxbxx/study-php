<?php

// Null 연산자
$message = null;

// null이면 해당 값을 반환, 아니면 변수에 할당된 값을 반환
echo $message ?? 'Hello, world';