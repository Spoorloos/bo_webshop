<?php

function render_shopping_cart_card($product, $count) { ?>
    <article class="shopping-cart-card" product-id="<?php echo $product['id'] ?>">
        <a class="shopping-cart-card__wrapper" href="product.php?id=<?php echo $product['id'] ?>">
            <div class="shopping-cart-card__image-wrapper">
                <img
                    class="shopping-cart-card__image"
                    src="<?php echo $product['image'] ?>"
                    alt="product image">
            </div>
            <div class="shopping-cart-card__content">
                <div class="shopping-cart-card__content__name-wrapper">
                    <h2 class="shopping-cart-card__content__name"><?php echo $product['name'] ?></h2>
                    <div class="shopping-cart-card__content__quantity">
                        <button class="shopping-cart-card__content__quantity__remove">-</button>
                        <span class="shopping-cart-card__content__quantity__value"><?php echo $count ?></span>
                        <button class="shopping-cart-card__content__quantity__add">+</button>
                    </div>
                </div>
                <strong class="shopping-cart-card__content__price"><?php echo '€' . $product['price'] ?></strong>
                <p class="shopping-cart-card__content__description"><?php echo $product['description'] ?></p>
            </div>
        </a>
    </article>
<?php }
