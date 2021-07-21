<?php

$number = fopen ("php://stdin","r");
$fizz = fgets($number);
$buzz = fgets($number);
$next = fgets($number);
$i = 1;
while($i <= $next) { 
    echo (($i % $fizz==0) and ($i % $buzz==0))  ?  "FB ":
        ($i % $fizz==0 ? "F ":
        ($i % $buzz==0 ? "B ": "$i "));
    $i++;
}
