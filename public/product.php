<?php
    if (!isset($_GET['id'])) {
        exit('<h1>Missing product id! :(</h1>');
    }

    require_once 'components/database.php';
    $connection = new DatabaseConnection();
    $result = $connection->fetch('SELECT * FROM product WHERE id = ?', 'd', $_GET['id']);
    
    if ($result->num_rows <= 0) {
        exit('<h1>Invalid product id! :(</h1>');
    }

    $product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mick's Webshop - <? echo $product['name'] ?></title>
    <?php require 'components/base_head.php' ?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <main>
        <h1><? echo $product['name'] ?> - <? echo $product['price'] ?> eur</h1>
        <img src="<? echo $product['image'] ?>" src="product image">
        <p><? echo $product['description'] ?></p>
    </main>
</body>
</html>