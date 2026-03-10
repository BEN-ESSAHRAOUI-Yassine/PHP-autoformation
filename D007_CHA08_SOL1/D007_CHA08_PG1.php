<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"])){
        $_SESSION["username"] = $_POST["username"];
        header("Location: D007_CHA08_PG2.php");
        exit();
    } else {
        echo "username missing";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Step 1</title>
</head>
<body>

<h2>Step 1: Enter Username</h2>

<form method="post">
    Username:
    <input type="text" name="username" required>
    <button type="submit">Next</button>
</form>

</body>
</html>