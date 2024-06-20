<?
    if (isset($_GET['query'])) {
        require_once 'components/database.php';
        require_once 'components/product_card.php';

        $connection = new DatabaseConnection();
        $results = $connection->fetch(
            'SELECT * FROM product WHERE name LIKE ?',
            's',
            "%{$_GET['query']}%",
        );

        foreach ($results->fetch_all(MYSQLI_ASSOC) as $result) {
            render_product_card($result);
        }
            
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mick's Webshop - Search</title>
    <?php require 'components/base_head.php' ?>
    <link rel="stylesheet" href="scss/pages/search.css">
    <script src="js/search.js" defer></script>
</head>
<body>
    <?php include 'components/header.php' ?>
    <main>
        <section class="search">
            <input class="search__bar" type="text" placeholder="Search for products">
        </section>
        <div class="main">
            <aside class="main__filter">

            </aside>
            <section class="main__results"></section>
        </div>
    </main>
</body>
</html>