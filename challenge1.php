<!DOCTYPE html>
<html>
<body>
<h1>calcul a tea bill</h1>


<?php
$cup = 10;
$price_Uni = 10;
$bill = 0 ;
$user = false;

echo 'welcome to our coffeshop !!! <br>';
echo 'are you a student ?<br>';

echo 'how many cup of tea u want? <br>';

if ($cup > 5) {
  $price_Uni = $price_Uni - 1;
}

$bill = $price_Uni * $cup;

if ($user == true) {
  $bill = $bill * 0.8;
} 
echo "you ordered ". $cup ." cups, that comes to : " . $bill ." MAD <br>" ;

?> 

</body>
</html>