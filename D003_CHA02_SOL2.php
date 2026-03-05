<?php

$age = 10;

echo "welcome to our event !!! \n How old are you ?: ";
$age = trim(fgets(STDIN));


// Bulk discount
if ($age < 12) {
            $price = 20;
} elseif ($age >= 12 && $age <= 18) {
            $price = 40;
} elseif ($age > 60) {
            $price = 30;
} else {
            $price = 60;
}
echo "Your age is : " . $age ." years. \n Your ticket price is : " . $price ." MAD. \n" ;
if ($price == 20) {
    echo " Special: Children's Menu included! <br>" ;
}   

?>