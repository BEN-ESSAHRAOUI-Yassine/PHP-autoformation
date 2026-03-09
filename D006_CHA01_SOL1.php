<?php

$products = [
    ["name" => "Laptop", "category" => "tech"],
    ["name" => "Phone", "category" => "tech"],
    ["name" => "Tablet", "category" => "tech"],
    ["name" => "Desk", "category" => "furniture"],
    ["name" => "Chair", "category" => "furniture"]
];

$category = $_GET['category'] ?? null;
$sort = $_GET['sort'] ?? 'asc';

if ($category) {
    $products = array_filter($products, function($product) use ($category) {
        return $product['category'] === $category;
    });
}


// Sort products alphabetically
usort($products, function($a, $b) use ($sort) {
    if ($sort === 'desc') {
        return strcmp($b['name'], $a['name']);
    }
    return strcmp($a['name'], $b['name']);
});

?>


<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
</head>
<body>

<h2>Filter by Category</h2>
<a href="?category=tech&sort=<?php echo $sort; ?>">Tech</a> |
<a href="?category=furniture&sort=<?php echo $sort; ?>">Furniture</a> |
<a href="?sort=<?php echo $sort; ?>">All</a>

<h2>Sort</h2>
<a href="?category=<?php echo $category; ?>&sort=asc">Ascending</a> |
<a href="?category=<?php echo $category; ?>&sort=desc">Descending</a>

<h2>Products</h2>
<ul>
<?php foreach ($products as $product): ?>
    <li><?php echo $product['category']; ?> >>>>>>> <?php echo $product['name']; ?></li>
<?php endforeach; ?>
</ul>


</body>
</html>