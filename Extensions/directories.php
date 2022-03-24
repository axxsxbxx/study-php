<?php

// Change a directory
chdir(__DIR__);


// Get current working directory
echo getcwd();


// Reading a directory
$files = scandir(__DIR__ . '/..');
var_dump($files);


// Directory Handling
// Open
$dir = opendir(__DIR__ . '/..');

// Read
while ($name = readdir($dir)) {
    var_dump($name);
}

// Reset
rewinddir($dir);

// Close
closedir($dir);