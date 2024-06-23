<?php
    require_once 'components/database.php';
    $connection = new DatabaseConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mick's Webshop - Cheap laptops & phones</title>
    <?php require_once 'components/base_head.php' ?>
    <link rel="stylesheet" href="scss/pages/main.css">
</head>
<body>
    <?php include_once 'components/header.php' ?>
    <main class="main">
        <div class="main__hero-wrapper">
            <div class="main__hero-wrapper__content"></div>
            <a class="main__hero-wrapper__scroll-btn" href="#sales-section">
                <img src="assets/chevron_arrow.svg" alt="arrow">
            </a>
        </div>
        <section class="main__sales" id="sales-section">
            <h2 class="main__sales__title">Products On Sale:</h2>
            <div class="main__sales__products"><?php
                include_once 'components/product_card.php';

                $result = $connection->fetch('SELECT * FROM product WHERE onsale = 1');
                $products = $result->fetch_all(MYSQLI_ASSOC);

                shuffle($products);

                for ($i = 0; $i < min(4, count($products)); $i++) {
                    render_product_card($products[$i]);
                }
            ?></div>
        </section>
    </main>
    <?php include_once 'components/footer.php' ?>
</body>
</html>