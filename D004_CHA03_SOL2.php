<!DOCTYPE html>
<html>
<body>
<h1>Debt tracker</h1>

<?php

$debts = [
    "Ali" => 50,
    "Sara" => 200,
    "Youssef" => 120,
    "Mina" => 80,
    "Karim" => 300
];

$total = 0;

foreach ($debts as $friend => $amount) {
    $total += $amount;
}

echo "Total debt: $total DH<br>";
echo "Friends who owe more than 100 DH:<br>";

foreach ($debts as $friend => $amount) {
    if ($amount > 100) {
        echo "<mark>$friend</mark>  owes $amount DH<br>";
    } else {
        echo "$friend  owes $amount DH<br>";
    }
}

?>

</body>
</html>
