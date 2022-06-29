<?php

$a = 0;
$b = 1;

echo "{$a} \n";
echo "{$b} \n";

while($c <= 10000) {
    $c = $a + $b;
    $a = $b;
    $b = $c;
    echo "{$c} \n";
} 