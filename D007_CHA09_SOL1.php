<?php
session_start();
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['item'])) {
        $item = $_POST['item'];
        if (!in_array($item, $_SESSION['cart'])) {
            $_SESSION['cart'][] = $item;
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$items = [
    "Laptop",
    "Phone",
    "Headphones"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Cart</title>
</head>
<body>

<h2>Cart: <?php echo count($_SESSION['cart']); ?> items</h2>

<h3>Products</h3>

<?php foreach ($items as $item): ?>

<form method="POST">
    <strong><?php echo $item; ?></strong>
    <input type="hidden" name="item" value="<?php echo $item; ?>">
    <button type="submit">Add to Cart</button>
</form>


<br>

<?php endforeach; ?>

<h3>Items in Cart:</h3>

<ul>
<?php foreach ($_SESSION['cart'] as $cartItem): ?>
    <li><?php echo $cartItem; ?></li>
<?php endforeach; ?>
</ul>

<form method="POST">
    <input type="submit" name="logout" value="logout">
</form> 

</body>
</html>