<?php

// 다중 반복문일 경우 레벨을 정해서 break와 continue 할 수 있음

// break
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        break 2;
    }
    echo $i;
}

// continue
$sum = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        continue 2;
    }
    $sum += $i;
}
echo $sum;