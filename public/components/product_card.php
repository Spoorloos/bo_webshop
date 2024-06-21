<?php

function render_product_card($product, $index) { ?>
    <article class="product-card" style="animation-delay: <?php echo $index * 0.1 ?>s">
        <a class="product-card__wrapper" href="product.php?id=<?php echo $product['id'] ?>">
            <div class="product-card__image-wrapper">
                <img class="product-card__image" src="<?php echo $product['image'] ?>" alt="product image">
            </div>
            <div class="product-card__bottom-row">
                <h2 class="product-card__bottom-row__name">
                    <?php echo $product['name'] ?>
                </h2>
                <strong class="product-card__bottom-row__price">
                    <?php echo '€' . $product['price'] ?>
                </strong>
                <button class="product-card__bottom-row__purchase" type="button" onclick="addToCart(event, <?php echo $product['id'] ?>)">
                    <img src="assets/shopping_bag.svg" alt="shopping bag">
                </button>
            </div>
        </a>
    </article>
<?php }
