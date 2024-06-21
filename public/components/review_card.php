<?php

function render_review_card($review) { ?>
    <article class="reviews__review">
        <img class="reviews__review__pfp" src="<?php echo $review['pfp'] ?>" alt="profile picture">
        <div class="reviews__review__info">
            <strong class="reviews__review__author"><?php echo $review['author'] ?></strong>
            <p class="reviews__review__content"><?php echo $review['content'] ?></p>
            <div class="reviews__review__stars">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <?php if ($i - $review['rating'] == 0.5): ?>
                        <img src="assets/star_half.svg" alt="star">
                    <?php elseif ($review['rating'] > $i): ?>
                        <img src="assets/star_full.svg" alt="star">
                    <?php else: ?>
                        <img src="assets/star_empty.svg" alt="star">
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </article>
<?php }