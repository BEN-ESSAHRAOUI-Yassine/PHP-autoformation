<!DOCTYPE html>
<html>
<body>
<h1><br>Challenge 01: The Personalized Greeting (Parameters)<br></h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h2>welcome to our app !!! </h2><br> Insert your name : <input type="text" name="fname">
    <input type="submit">
</form>

<?php
function greetUser($name) {
  echo "<br> Hello, " . $name . " !<br>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
      echo "Name please!!!";
    } else {
      greetUser($name);
    }
}
?>

</body>
</html>
