<!DOCTYPE html>
<html>
<body>
<h1><br>Challenge 03: The Logic Gatekeeper (Boolean Return)<br></h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <br> Insert your age : <input type="number" name="fname">
    <input type="submit">
</form>

<?php
function isAdult($age) {
  if ($age > 17) {
    return true;
  } else{
    return false;
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = htmlspecialchars($_REQUEST['fname']);
    if (empty($age) || (is_numeric($age) == false)) {
      echo "enter your age please!!!<br>";
    }
    if (isAdult($age)==true){
      echo "<br> Access Granted.<br>";
    } else {
      echo "<br> Access Denied.<br>";
    }
      
    
}
?>

</body>
</html>
