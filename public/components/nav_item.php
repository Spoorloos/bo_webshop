<?php

function render_nav_item($item_name, $item_elements) { ?>
    <div class="bottom-header__nav-item" tabindex="0">
        <h2 class="bottom-header__nav-item__name">
            <?= $item_name ?>
            <img
                class="bottom-header__nav-item__name__arrow"
                src="assets/chevron_arrow.svg"
                alt="header item arrow"
                width="24" height="24">
        </h2>
        <div class="bottom-header__nav-item__wrapper">
            <ul class="bottom-header__nav-item__list">
                <?php foreach ($item_elements as $name => $address): ?>
                    <li><a href="<?= $address ?>"><?= $name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php }