<?php

// Timezone
date_default_timezone_set("Asia/Seoul");
echo date_default_timezone_get();


// Get time : Unix Timestamp
$t = time();
var_dump(localtime($t, true));
var_dump(getdate($t));


// Timestamp format
echo strftime("%d/%m/%Y %H:%M:%S", $t);
echo date("d/m/Y H:i:s", $t);


// Make a timestamp
$timestamp = mktime("1", "15", "30");
echo date("d/m/Y H:i:s", $timestamp);


// Parsing String time
// windows에서 사용 X
// strptime(strftime("%d/%m/%Y %H:%M:%S", $t), "%d/%m/%Y %H:%M:%S");


// String to time
$timestamp =  strtotime("now");
echo date("d/m/Y H:i:s", $timestamp);

$timestamp =  strtotime("+1 days");
echo date("d/m/Y H:i:s", $timestamp);


// Script time execution time check
$stime = microtime(true);
sleep(1);

echo microtime(true) - $stime;