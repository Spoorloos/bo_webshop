<?php
require_once 'components/database.php';
include_once 'components/shopping_cart_card.php';

$connection = new DatabaseConnection();
$cart = [];

if (isset($_COOKIE['cart']) && $_COOKIE['cart'] != '') {
    $cart_ids = json_decode($_COOKIE['cart']);
    $cart_ids = array_count_values($cart_ids);

    foreach ($cart_ids as $product_id => $count) {
        array_push($cart, [
            $count,
            $connection->fetch(
                'SELECT * FROM product WHERE id = ?',
                'i', $product_id
            )->fetch_assoc()
        ]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mick's Webshop - Shopping Cart</title>
    <?php require_once 'components/base_head.php' ?>
    <link rel="stylesheet" href="scss/pages/shopping_cart.css">
</head>
<body>
    <?php include_once 'components/header.php' ?>
    <main class="main">
        <section class="main__cart">
            <div class="main__cart__wrapper">
                <h1 class="main__cart__wrapper__title">Shopping Cart</h1>
                <div class="main__cart__wrapper__products"><?php
                    foreach ($cart as [ $count, $product ]) {
                        render_shopping_cart_card($product, $count);
                    }
                ?></div>
            </div>
            <div class="main__cart__checkout">
                <div>
                    <?php
                        $subtotal = 0;
                        foreach ($cart as [ $count, $product ]) {
                            $subtotal += $product['price'] * $count;
                        }
                        $shipping = $subtotal > 30 || $subtotal <= 0 ? 0 : 5;
                    ?>
                    <strong class="main__cart__checkout__subtotal">Subtotal:<span>&euro;<?php echo number_format($subtotal, 2) ?></span></strong>
                    <strong class="main__cart__checkout__shipping">Shipping:<span>&euro;<?php echo number_format($shipping, 2) ?></span></strong>
                    <strong class="main__cart__checkout__total">Total:<span>&euro;<?php echo number_format($subtotal + $shipping, 2) ?></span></strong>
                </div>
                <a class="main__cart__checkout__checkout black-button" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Checkout</a>
            </div>
        </section>
    </main>
    <?php include_once 'components/footer.php' ?>
</body>
</html>