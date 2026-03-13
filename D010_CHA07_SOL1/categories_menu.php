<?php
require "db.php";

/* Fetch all categories */
$sql = "SELECT id, name FROM categories";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Category Menu</title>
</head>
<body>

<h2>Select a Category</h2>

<select name="category">

<?php
foreach ($categories as $category) {
    echo "<option value='" . htmlspecialchars($category['id']) . "'>";
    echo htmlspecialchars($category['name']);
    echo "</option>";
}
?>

</select>

</body>
</html>