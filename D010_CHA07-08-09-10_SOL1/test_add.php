<?php
require "db.php";


$title = "Le Chevalier double";
$author = "Théophile Gautier";
$price = 35;

if(isset($pdo)){
$sql = "INSERT INTO library_books (title, author, price) 
        VALUES (:title, :author, :price)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'title' => $title,
    'author' => $author,
    'price' => $price
]);

$lastId = $pdo->lastInsertId();

echo "Success! Book added with ID: " . $lastId;
}
?>