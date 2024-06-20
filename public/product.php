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
    $result = $connection->fetch('SELECT * FROM review WHERE productid = ?', 'd', $product['id']);
    $reviews = $result->num_rows > 0 ? $result->fetch_all(MYSQLI_ASSOC) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mick's Webshop - <?= $product['name'] ?></title>
    <?php require 'components/base_head.php' ?>
    <link rel="stylesheet" href="scss/pages/product.css">
    <script src="js/product.js" defer></script>
</head>
<body>
    <?php include 'components/header.php' ?>
    <main>
        <article class="product">
            <img class="product__image" src="<?= $product['image'] ?>" alt="product image" onclick="openModal()">
            <div class="product__info">
                <h1 class="product__info__name"><?= $product['name'] ?></h1>
                <strong class="product__info__price">
                    <? if (isset($product['newprice'])): ?>
                        <span class="old-price"><?= number_format($product['price'], 2) ?></span>
                        <span><?= number_format($product['newprice'], 2) ?></span>
                    <? else: ?>
                        <span><?= number_format($product['price'], 2) ?></span>
                    <? endif; ?>
                </strong>
                <p class="product__info__description"><?= $product['description'] ?></p>
                <button class="product__info__addtocart" type="button">Add To Cart</button>
                <span class="product__info__dtext">Direct leverbaar | Gratis verzending vanaf €30</span>
            </div>
            <dialog class="product__image-modal">
                <img class="product__image-modal__image" src="<?= $product['image'] ?>" alt="product image">
                <button class="product__image-modal__close" type="button" onclick="closeModal()">
                    <img src="assets/close.svg" alt="close modal">
                </button>
            </dialog>
        </article>
        <? if (!empty($reviews)): ?>
            <h2 class="reviews__title">Reviews</h2>
            <section class="reviews">
                <? shuffle($reviews) ?>
                <? foreach (array_slice($reviews, 0, 4) as $review): ?>
                    <article class="reviews__review">
                        <img class="reviews__review__pfp" src="<?= $review['pfp'] ?>" alt="profile picture">
                        <div class="reviews__review__info">
                            <strong class="reviews__review__author"><?= $review['author'] ?></strong>
                            <p class="reviews__review__content"><?= $review['content'] ?></p>
                            <div class="reviews__review__stars">
                                <? for ($i = 0; $i < 5; $i++): ?>
                                    <? if ($i - $review['rating'] == 0.5): ?>
                                        <img src="assets/star_half.svg" alt="star">
                                    <? elseif ($review['rating'] > $i): ?>
                                        <img src="assets/star_full.svg" alt="star">
                                    <? else: ?>
                                        <img src="assets/star_empty.svg" alt="star">
                                    <? endif; ?>
                                <? endfor; ?>
                            </div>
                        </div>
                    </article>
                <? endforeach; ?>
            </section>
        <? endif; ?>
    </main>
</body>
</html>