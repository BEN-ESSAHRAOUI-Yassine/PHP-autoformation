<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (!empty($_POST["language"])){
        $_SESSION["language"] = $_POST["language"];
        header("Location: D007_CHA08_PG3.php");
        exit();
    } else {
        echo "favorite language missing";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Step 2</title>
</head>
<body>

<h2>Step 2: Favorite Programming Language</h2>

<form method="post">
    Language:
    <input type="text" name="language" required>
    <button type="submit">Finish</button>
</form>

</body>
</html>