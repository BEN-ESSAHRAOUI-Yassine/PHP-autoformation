<?php
$name = "";
$email = "";
$message = "";
$feedback = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'] ?? "";
    $email = $_POST['email'] ?? "";
    $message = $_POST['message'] ?? "";
    if (strpos($email, "@") === false) {
        $feedback = " Please enter a valid email address.";
    } else {
        $feedback = " Thank you! Your message has been received.";
        $name = "";
        $email = "";
        $message = "";
    }
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Contact Us</h2>

<p><?php echo $feedback; ?></p>

<form method="POST" action="">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $name; ?>"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?php echo $email; ?>"><br><br>

    <label>Message:</label><br>
    <textarea name="message"><?php echo $message; ?></textarea><br><br>

    <button type="submit">Send Message</button>

</form>

</body>
</html>