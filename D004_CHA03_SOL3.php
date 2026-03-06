<!DOCTYPE html>
<html>
<body>
<h1>Debt tracker</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h2>welcome to our app !!! </h2>
    <br> Insert name of your friend : <input type="text" name="fname">
    <br> How much he/she owes you ? : <input type="number" name="fname2">
    <input type="submit">
</form>

<?php
$debt = [];
$friend = [];
$total = 0 ;
$stat = 0;

for($i = 0; $i < 4; $i++){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $friend[$i] = htmlspecialchars($_REQUEST['fname']);
    if (empty($friend[$i])) {
        echo "Name please!!!";
    }
    $debt[$i]= htmlspecialchars($_REQUEST['fname2']);
    if (empty($debt[$i])) {
        echo "How much he owes you!!!";
    }
    $_SERVER["REQUEST_METHOD"] ="";
    
    $stat++;
    echo $stat;
    if ($stat == 4){
        $stat = 0;
        for($i = 0; $i < 4; $i++){
            $total += $debt[$i];
        }
        echo "your total amount of debts is : " . $total . " MAD.\n and friends who owes you more than 100 DH :";
        for($i = 0; $i < 4; $i++){
            if ($debt[$i] > 100) {
                    echo $friend[$i] . " owes you " . $debt[$i] . " MAD. \n";
            }
        }
    }
}
}

?> 

</body>
</html>
