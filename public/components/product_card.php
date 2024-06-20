<?php

function render_product_card($product) { ?>
    <article class="product-card">
        <a class="product-card__wrapper" href="product.php?id=<?= $product['id'] ?>">
            <img class="product-card__image" src="<?= $product['image'] ?>" alt="product image" />
            <div class="product-card__bottom-row">
                <h2 class="product-card__bottom-row__name">
                    <?= $product['name'] ?>
                </h2>
                <strong class="product-card__bottom-row__price">
                    <?= '€' . $product['price'] ?>
                </strong>
                <button class="product-card__bottom-row__purchase" type="button" onclick="addToCart(event, <?= $product['id'] ?>)">
                    <img src="../assets/shopping_bag.svg" alt="shopping bag" />
                </button>
            </div>
        </a>
    </article>
<?php }
