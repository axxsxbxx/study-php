<?php

// 변수 정의
$message = 'Hello, world'; //String
$userCount = 0; // Int
$pi = 3.14; // Double
$is_visited = false; // Boolean
$temp = null; // Null 

// 변수 사용
echo $message;

// String 내부에서의 변수 사용
// 사용하기 위해서는 반드시 큰 따옴표 사용해야한다.
// 작은 따옴표는 변수를 인식하지 않는다.
echo("The message is {$message}");

// Here Doc, Now Doc.
// 여러줄로 문자열을 선언할 때 직관적으로 볼 수 있는 방법
// 잘 사용하지는 않음

// Here Doc
echo <<< HTML
<html>
    <head>
        <title>$message</title>
    </head>
</html>    
HTML;

// Now Doc
echo <<< 'HTML'
<html>
    <head>
        <title>$message</title>
    </head>
</html>    
HTML;

// Free.
// 메모리에서 해제
unset($message);