<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Contact form </h1>
    <form action="D006_CHA02_SOL1.php" method="POST" >
        <label> Username : </label> <input type="text" name="Username"> <br>
        <label> Email : </label> <input type="email" name="Emailadresse"> <br>
        <label> Message : </label> <input type="text" name="Message"> <br>
        <input type="submit">Send Message</input>
    </form>
</body>
</html>

<?php
    echo "{$_POST["Username"]} <br>";


?>