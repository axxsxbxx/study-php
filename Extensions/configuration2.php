<?php

// ini에서 zend_assertions는 ini_set으로 변경할 수 없음
// ini_set('zend.assertions', 1);

// Active
assert_options(ASSERT_ACTIVE, true);
// Stop testing on failure
assert_options(ASSERT_BAIL, false);
// PHP Trace
assert_options(ASSERT_WARNING, true);
// Callback
assert_options(ASSERT_CALLBACK, 'assertFailure');

function assertFailure(...$args)
{
    var_dump($args);
}

// assert 
assert(false, __LINE__);