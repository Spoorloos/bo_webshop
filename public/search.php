<?php
    require_once 'components/database.php';
    $connection = new DatabaseConnection();

    // Get the min and max prices
    [ $lowestprice, $highestprice ] = $connection
        ->fetch('SELECT min(price) AS lowestprice, max(price) AS highestprice FROM product')
        ->fetch_array();

    // Get categories
    $all_catagories = $connection->fetch('SELECT name FROM category')->fetch_all();
    $product_categories = $connection->fetch('
        SELECT p.id, c.name FROM productcategory AS pc
        JOIN product AS p ON pc.productid = p.id
        JOIN category AS c ON pc.categoryid = c.id
    ')->fetch_all();

    // Get parameters
    $query = $_GET['query'] ?? '';
    $min_price = $_GET['min-price'] ?? $lowestprice;
    $max_price = $_GET['max-price'] ?? $highestprice;
    $categories = $_GET['categories'] ?? [];
    $first_load = empty($_GET);

    // Get products
    $products = $connection->fetch(
        'SELECT * FROM product WHERE name LIKE ? AND price >= ? AND price <= ?',
        'sdd', "%$query%", $min_price, $max_price
    )->fetch_all(MYSQLI_ASSOC);
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
        <form method="GET" autocomplete="off">
            <section class="search">
                <input class="search__bar" type="text" name="query" placeholder="Search for products" value="<?php echo $query ?>" size="10">
                <input class="search__search black-button" type="submit" value="Search">
            </section>
        
            <div class="main">
                <section class="main__filter">
                    <h2>Prices</h2>
                    <div class="main__filter__price-selector">
                        <label class="main__filter__label" for="min-price">
                            Minimum Price:
                            <span class="input-value">€ <?php echo number_format($min_price, 2) ?></span>
                        </label>
                        <input
                            class="main__filter__input"
                            type="range"
                            name="min-price"
                            id="min-price"
                            step="0.01"
                            min="<?php echo $lowestprice ?>"
                            max="<?php echo $highestprice ?>"
                            value="<?php echo $min_price ?>"
                            oninput="this.parentNode.querySelector('.input-value').innerText = '€ ' + (+this.value).toFixed(2)"
                            onchange="this.form.submit()">
                    </div>
                    <div class="main__filter__price-selector">
                        <label class="main__filter__label" for="max-price">
                            Maximum Price:
                            <span class="input-value">€ <?php echo number_format($max_price, 2) ?></span>
                        </label>
                        <input
                            class="main__filter__input"
                            type="range"
                            name="max-price"
                            id="max-price"
                            step="0.01"
                            min="<?php echo $lowestprice ?>"
                            max="<?php echo $highestprice ?>"
                            value="<?php echo $max_price ?>"
                            oninput="this.parentNode.querySelector('.input-value').innerText = '€ ' + (+this.value).toFixed(2)"
                            onchange="this.form.submit()">
                    </div>
                    <h2>Categories</h2>
                    <?php foreach ($all_catagories as [ $category ]): ?>
                        <div class="main__filter__category">
                            <input
                                class="main__filter__input"
                                type="checkbox"
                                id="<?php echo $category ?>"
                                name="categories[]"
                                value="<?php echo $category ?>"
                                onchange="this.form.submit()"
                                <?php
                                    echo $first_load || in_array($category, $categories) ? 'checked' : ''
                                ?>>
                            <label
                                class="main__filter__label"
                                for="<?php echo $category ?>"><?php echo $category ?></label>
                        </div>
                    <?php endforeach; ?>
                </section>
                <section class="main__results"><?php
                    include_once 'components/product_card.php';
                    
                    foreach ($products as $product) {
                        if (!$first_load) {
                            $current_categories = array_map(function($x) {
                                return $x[1];
                            }, array_filter($product_categories, function($x) {
                                global $product;
                                return $x[0] === $product['id'];
                            }));

                            $has_category = false;

                            foreach ($categories as $category) {
                                if (in_array($category, $current_categories)) {
                                    $has_category = true;
                                    break;
                                }
                            }

                            if (!$has_category) {
                                continue;
                            }
                        }

                        render_product_card($product);
                    }
                ?></section>
            </div>
        </form>
    </main>
    <?php include_once 'components/footer.php' ?>
</body>
</html>
