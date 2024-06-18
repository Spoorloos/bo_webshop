<?php

function render_product_card($product) { ?>
    <article class="product-card">
        <a class="product-card__wrapper" href="product.php?id=<? echo $product['id'] ?>">
            <img class="product-card__image" src="<? echo $product['image'] ?>" alt="product image" />
            <div class="product-card__bottom-row">
                <h2 class="product-card__bottom-row__name">
                    <? echo $product['name'] ?>
                    <span class="product-card__bottom-row__price">
                        <? echo '€' . $product['price'] ?>
                    </span>
                </h2>
                <button class="product-card__bottom-row__purchase" type="button" onclick="addToCart(event, <? echo $product['id'] ?>)">
                    <img src="../assets/shopping_bag.svg" alt="shopping bag" />
                </button>
            </div>
            <p class="product-card__description">
                <? echo $product['description'] ?>
            </p>
        </a>
    </article>
<?php }
