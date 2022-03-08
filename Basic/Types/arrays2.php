<?php

$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

// Insert
$messages[] = 'whoops';
// $messages[3] = 'whoops';

// Select
echo $messages[3];

// Update
$messages[3] = 'Do you know?';
echo $messages[3];

// Delete
unset($messages[3]);
var_dump($messages);