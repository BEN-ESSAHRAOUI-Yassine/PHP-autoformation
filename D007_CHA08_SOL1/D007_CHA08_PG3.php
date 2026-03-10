<?php
session_start();

$username = $_SESSION["username"] ?? "Guest";
$language = $_SESSION["language"] ?? "Unknown";

if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("Location: D007_CHA08_PG1.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Summary</title>
</head>
<body>

<h2>Summary</h2>

<p>Hello <?php echo htmlspecialchars($username); ?>, you love <?php echo htmlspecialchars($language); ?>!</p>
<form method="post">
    <br><input type="submit" name="logout" value="Finish">
</form>
</body>
</html>