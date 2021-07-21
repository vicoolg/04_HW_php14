<?php
echo "Enter the cost of potatoes";

$handle = fopen ("php://stdin","r");
$price = fgets($handle);

if ($price > 100) {
    echo "Expensive";
}  elseif (($price < 100) && ($price > 10)) {
    echo "Norm";
} else {
    echo "Cheap";
}
