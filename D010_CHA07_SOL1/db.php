<?php
if(isset($_POST['connect'])){ //just testing for challenge 1

    $host = "localhost";
    $dbname = "library_db";
    $user = "root";
    $password = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo " Database library connected successfully!";

    } catch (PDOException $e) {
        die("Database connection failed. Please try again later.");
    }
}
?>

<!-- just testing for challenge 1  -->
 <form method="post">
    <button type="submit" name="connect">Test Database Connection</button>
</form> 