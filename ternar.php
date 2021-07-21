<?php
echo "How often do you go to the gym? \n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

echo $number == 2 ? "So-so":
    ($number == 3 ? "You are on the right track":
    ($number == 4 ? "You're an athlete": " I do not understand ("));