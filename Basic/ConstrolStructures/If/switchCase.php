<?php

$context = 1;

// switch ~ case
// 선택하는 경우에 많이 사용
switch ($context) {
    case 1:
        echo 'Hello, world';
        break;
    case 2:
        echo 'Who are you?';
        break;
    default:
        echo 'Bye';
}

// 위의 조건식을 if문으로
if ($context == 1) {
    echo 'Hello, world';
} elseif ($context == 2) {
    echo 'Who are you?';
} else {
    echo 'Bye';
}

// 이런 형식으로 써도 가능
switch ($context):
    case 1:
        echo 'Hello, world';
        break;
    case 2:
        echo 'Who are you?';
        break;
    default:
        echo 'Bye';
endswitch;