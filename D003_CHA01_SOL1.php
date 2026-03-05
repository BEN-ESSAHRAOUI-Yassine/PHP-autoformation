<!DOCTYPE html>
<html>
<body>
<h1>calcul a tea bill</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <h2>welcome to our coffeshop !!! </h2><br> Are you a student ?: <input type="text" name="fname">
  <br> how many cup of tea u want?: <input type="number" name="fname2">
  <input type="submit">
</form>

<?php
$cup = 10;
$price_Uni = 10;
$bill = 0 ;
$user = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $luser = htmlspecialchars($_REQUEST['fname']);
    if (empty($luser)) {
        echo "Are you really a student!!!";
    } else {
        if ($luser == "yes") {
            $user = true;
        } else {
            $user = false;
        }
    }
    $cup = htmlspecialchars($_REQUEST['fname2']);
    if (empty($cup)) {
        echo "You wont order anything!!!";
    } else {
        echo "You ordered " . $cup ." cups of Tea.<br>";
    }
    if ($cup > 5) {
        $price_Uni = $price_Uni - 1;
    }
    $bill = $price_Uni * $cup;
    if ($user == true) {
        $bill = $bill * 0.8;
    }   
    echo "That comes to : " . $bill ." MAD. <br>" ;
}
?> 

</body>
</html>