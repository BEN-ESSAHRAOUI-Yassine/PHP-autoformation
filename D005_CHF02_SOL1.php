<!DOCTYPE html>
<html>
<body>
<h1><br>Challenge 02: The Calculation Engine (Return Values)<br></h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <br> Insert your width : <input type="number" name="fname">
    <br> Insert your height : <input type="number" name="fname2">
    <input type="submit">
</form>

<?php
$i=0;
function calculateArea($width ,$height) {
  return ($width *$height);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $width = htmlspecialchars($_REQUEST['fname']);
    if (empty($width) || (is_numeric($width) == false)) {
      $i++;
      echo "enter width please!!!<br>";
    }
    $height = htmlspecialchars($_REQUEST['fname2']);
    if (empty($height) || (is_numeric($height) == false)) {
      $i++;
      echo "enter height please!!!<br>";
    }
    if ($i == 0){
      $totalArea = calculateArea( $width, $height);
      echo "<br> The total area is " . $totalArea . " square units.<br>";
    } else {
      $i = 0;
      echo "<br> Area cannot be calculated !<br>";
    }
      
    
}
?>

</body>
</html>
