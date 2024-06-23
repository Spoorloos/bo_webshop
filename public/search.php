<?php
    require_once 'components/database.php';

    $query = $_GET['query'] ?? '';
    $connection = new DatabaseConnection();
    $results = $connection->fetch('SELECT * FROM product WHERE name LIKE ? LIMIT 10', 's', "%$query%");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mick's Webshop - Search</title>
    <?php require_once 'components/base_head.php' ?>
    <link rel="stylesheet" href="scss/pages/search.css">
</head>
<body>
    <?php include_once 'components/header.php' ?>
    <main>
        <form class="search" method="GET" autocomplete="off">
            <input class="search__bar" type="text" name="query" placeholder="Search for products" value="<?php echo $query ?>" size="10">
            <input class="search__search black-button" type="submit" value="Search">
        </form>
        <div class="main">
            <form class="main__filter">
     
            </form>
            <section class="main__results"><?php
                include_once 'components/product_card.php';
                
                foreach ($results->fetch_all(MYSQLI_ASSOC) as $product) {
                    render_product_card($product);
                }
            ?></section>
        </div>
    </main>
    <?php include_once 'components/footer.php' ?>
</body>
</html>