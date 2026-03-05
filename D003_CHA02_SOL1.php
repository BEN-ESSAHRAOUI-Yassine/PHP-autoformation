<!DOCTYPE html>
<html>
<body>
<h1>Ticketing system for a local event.</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <h2>welcome to our event !!! </h2><br> How old are you ?: <input type="number" name="fname">
  <input type="submit">
</form>

<?php
$age = 10;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = htmlspecialchars($_REQUEST['fname']);
    if (empty($age)) {
        echo "YOUR AGE PLEASE!!!";
    } else {
        if ($age < 12) {
            $price = 20;
        } elseif ($age >= 12 && $age <= 18) {
            $price = 40;
        } elseif ($age > 60) {
            $price = 30;
        } else {
            $price = 60;
        }
    }
    echo "Your age is : " . $age ." years. <br>" ;
    echo "Your ticket price is : " . $price ." MAD. <br>" ;
    if ($price == 20) {
        echo " Special: Children's Menu included! <br>" ;
    }   
    
}
?> 

</body>
</html>