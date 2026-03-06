<!DOCTYPE html>
<html>
<body>
<h1><br>Challenge 04: Even Number Counter<br></h1>

<?php
$i = 1; 
$count = 0;
while ($i < 51) { 
  if ($i % 2 == 0) { $count++; }
  $i++; 
}
echo "Total even numbers: " . $count . "<br>";
?>

</body>
</html>
