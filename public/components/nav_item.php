<?php

function render_nav_item($item_name, $item_elements) { ?>
    <div class="bottom-header__nav-item" tabindex="0">
        <h2 class="bottom-header__nav-item__name">
            <?php echo $item_name ?>
            <svg class="bottom-header__nav-item__name__arrow" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 -960 960 960" fill="currentColor"><path d="m480-555.69-184 184L267.69-400 480-612.31 692.31-400 664-371.69l-184-184Z"/></svg>
        </h2>
        <div class="bottom-header__nav-item__wrapper">
            <ul class="bottom-header__nav-item__list">
                <?php foreach ($item_elements as $name => $address): ?>
                    <li><a href="<?php echo $address ?>"><?php echo $name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php }