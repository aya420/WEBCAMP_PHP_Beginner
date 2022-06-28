<?php

$a = 0;    
$b = 1; 

for($i=0;$i<20;$i++)    
{    
    $c = $a + $b;    
    echo "{$c}";  
    echo "\n";   
    $a=$b;       
    $b=$c;
}   