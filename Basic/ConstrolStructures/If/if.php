<?php

// if
// false인 경우 -- [], '', false, 0, null
if (true) {
    echo 'Hello, world';
}

// if ~ else
if (false) {
    echo 'Hello, world';
} else {
    echo 'Bye';
}

// if ~elseif ~ else
if (false) {
    echo 'Hello, world';
} elseif (true) {
    echo 'Who are you?';
} else {
    echo 'Bye';
}

// if문 내에서 변수 할당
if ($message = 'Hello, world') {
    echo $message;
}

// 이런 형식으로 써도 가능
if (false):
    echo 'Hello, world';
elseif (true):
    echo 'Who are you?';
else:
    echo 'Bye';
endif;