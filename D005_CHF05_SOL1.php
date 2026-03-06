<!DOCTYPE html>
<html>
<body>
<h1><br>Challenge 05: The Text Flipper (Algorithmic Synthesis)<br></h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <br> Insert a word : <input type="text" name="fname">
    <input type="submit">
</form>

<?php
function manualReverse($text) {
    $reversed = "";

    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $reversed .= $text[$i];
    }

    return $reversed;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = htmlspecialchars($_REQUEST['fname']);
    if (empty($text)) {
      echo "enter a word please!!!<br>";
    }
    echo "<br> " . manualReverse($text) . "<br>";
}
?>

</body>
</html>
