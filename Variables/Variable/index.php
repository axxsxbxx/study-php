<?php

// 가변 변수
// 가급적 안 쓰는 것이 좋다 (꼭 필요한 상황에서만 사용)
$varName = 'message';
// $message = 'Hello, world';
$$varName = 'Hello, world';
// ${$varName} = 'Hello, world';

echo $message;