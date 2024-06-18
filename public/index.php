<?php
    require_once 'components/database.php';
    $connection = new DatabaseConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mick's Webshop - Cheap laptops & phones</title>
    <? require 'components/base_head.php' ?>
</head>
<body>
    <? include 'components/header.php' ?>
    <div class="hero-wrapper"></div>
    <main class="main">
        <h2 class="main__sales__title">Products On Sale:</h2>
        <section class="main__sales">
            <?php
                include_once 'components/product_card.php';

                $result = $connection->fetch('SELECT * FROM product WHERE onsale = 1');
                $products = $result->fetch_all(MYSQLI_ASSOC);

                shuffle($products);

                for ($i = 0; $i < min(3, count($products)); $i++) {
                    render_product_card($products[$i]);
                }
            ?>
        </section>
    </main>
</body>
</html>