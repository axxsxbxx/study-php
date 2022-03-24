<?php

// from Path
echo basename(__FILE__);
echo dirname(__FILE__, 2);


// to Absolute Path
echo realpath('.');


// Get path info
var_dump(pathinfo(__FILE__));


// Find Files
var_dump(glob('./*php'));

// File Control 