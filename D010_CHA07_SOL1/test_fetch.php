<?php
require "db.php"; 

$books=[];
$minPrice = 20; 

if(isset($pdo)){
    $sql = "SELECT title, price FROM library_books WHERE price > :price";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['price' => $minPrice]);
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
</head>
<body>

<h2>Books with price greater than <?php echo $minPrice; ?></h2>
<?php if(!empty($books)) { ?>
<ul>
    <?php
        foreach ($books as $book) {
            // echo "<li>" . htmlspecialchars($book['title']) . " ---> " . htmlspecialchars($book['price']) . "</li>";
            echo "<li>" . htmlspecialchars($book['title']) . "</li>";
        }
    ?>
</ul> 
<?php } ?>
</body>
</html>