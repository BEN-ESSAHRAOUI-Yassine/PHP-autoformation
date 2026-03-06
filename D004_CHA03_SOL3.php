<!DOCTYPE html>
<html>
<body>
<h1>Debt tracker</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h2>welcome to our app !!! </h2>
    <br> Insert name of your friend     : <input type="text" name="fnam0">
    <br> How much he/she owes you ? : <input type="number" name="fdeb0">
    <br> Insert name of your friend     : <input type="text" name="fnam1">
    <br> How much he/she owes you ? : <input type="number" name="fdeb1">
    <br> Insert name of your friend     : <input type="text" name="fnam2">
    <br> How much he/she owes you ? : <input type="number" name="fdeb2">
    <br> Insert name of your friend     : <input type="text" name="fnam3">
    <br> How much he/she owes you ? : <input type="number" name="fdeb3">
    <br> Insert name of your friend     : <input type="text" name="fnam4">
    <br> How much he/she owes you ? : <input type="number" name="fdeb4">
    <input type="submit">
</form>

<?php
$debt = [];
$friend = [];
$total = 0 ;
$stat = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    for($i = 0; $i < 5; $i++){
        $friend[$i] = htmlspecialchars($_REQUEST['fnam'.$i]);
        if (empty($friend[$i])) {
            echo "Name please!!!";
        }
        $debt[$i]= htmlspecialchars($_REQUEST['fdeb'.$i]);
        if (empty($debt[$i])) {
            echo "How much he owes you!!!";
        }
    }
    for($i = 0; $i < 5; $i++){
        $total += $debt[$i];
    }
    echo "your total amount of debts is : " . $total . " DH.<br> and friends who owes you more than 100 DH :";
    for($i = 0; $i < 5; $i++){
        if ($debt[$i] > 100) {
            echo "<br> <mark>" . $friend[$i] . "</mark> owes you " . $debt[$i] . " DH. <br> ";
        }else {
            echo "<br> " .  $friend[$i] . " owes you " . $debt[$i] . " DH. <br> ";
        }

    }
    
}


?> 

</body>
</html>
