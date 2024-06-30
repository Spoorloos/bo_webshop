<?php

function render_product_card($product) { ?>
    <article class="product-card">
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
                <button class="product-card__bottom-row__purchase" type="button" onclick="addToCartButton(event, <?php echo $product['id'] ?>)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                </button>
            </div>
        </a>
    </article>
<?php }
