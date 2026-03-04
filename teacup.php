<?php

$price_Uni = 10;

echo "Enter number of cups: ";
$cup = trim(fgets(STDIN));

echo "Are you a student? (yes/no): ";
$user = strtolower(trim(fgets(STDIN)));

$bill = 0;

// Bulk discount
if ($cup > 5) {
    $price_Uni = $price_Uni - 1;
}

$bill = $price_Uni * $cup;

if ($user == "yes") {
    $bill = $bill * 0.8;
}

echo "you ordered ". $cup ." cups, that comes to : " . $bill ." MAD ";

?>