<header>
    <div class="top-header">
        <div class="top-header__klarna">
            <img src="assets/klarna.svg" alt="klarna">
            <span>Shop Now. Pay Later.</span>
        </div>
        <nav class="top-header__nav">
            <button class="top-header__nav__darkmode" type="button">Darkmode</button>
            <a href="#">Over Ons</a>
            <a href="#">Blog</a>
            <a href="#">FAQ</a>
        </nav>
    </div>
    <div class="bottom-header">
        <a class="bottom-header__logo-wrapper" href="./">
            <img class="bottom-header__logo" src="assets/logo.svg" alt="logo">
        </a>
        <nav class="bottom-header__nav">
            <?php
                $item_name = 'Lorem, ipsum.';
                $item_elements = [ 'abc' => 'https://youtube.com', 'def' => 'https://google.com' ];

                for ($i = 0; $i < 5; $i++) {
                    include 'components/nav_item.php';
                }
            ?>
        </nav>
        <div class="bottom-header__account">
            <a href="#"><img src="assets/user.svg" alt="account"></a>
            <a href="search.php"><img src="assets/search.svg" alt="search"></a>
            <a href="#"><img src="assets/shopping_bag.svg" alt="shopping cart"></a>
            <div class="bottom-header__account__menu-wrapper">
                <img src="assets/menu.svg" alt="menu">
            </div>
        </div>
    </div>
</header>