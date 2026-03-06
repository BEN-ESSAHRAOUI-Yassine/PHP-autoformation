<!DOCTYPE html>
<html>
<body>
<h1><br>Challenge 04: The "Safe" Multiplier (Logic Guarding)<br></h1>

<?php
function multiplyNumbers($a, $b) {
  if ((is_numeric($a) == true) && (is_numeric($b) == true )) {
  return $a * $b ;
  } else {
  return "Error: Invalid Input.";
  }
}

echo "<br>" . multiplyNumbers(5, 10) . "<br>";
echo "<br>" . multiplyNumbers(5, "apple") . "<br>";

?>

</body>
</html>
