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
    <?php require 'components/base_head.php' ?>
    <link rel="stylesheet" href="scss/pages/search.css">
</head>
<body>
    <?php include 'components/header.php' ?>
    <main>
        <form class="search" method="GET" autocomplete="off">
            <input class="search__bar" type="text" name="query" placeholder="Search for products" value="<?php echo $query ?>">
            <input class="search__search black-button" type="submit" value="Search">
        </form>
        <div class="main">
            <aside class="main__filter">
                <h1>Test</h1>
            </aside>
            <section class="main__results"><?php
                require_once 'components/product_card.php';
                
                foreach ($results->fetch_all(MYSQLI_ASSOC) as $index => $product) {
                    render_product_card($product, $index);
                }
            ?></section>
        </div>
    </main>
</body>
</html>