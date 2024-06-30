<?php
    include_once 'components/nav_item.php';
?>
<header>
    <div class="top-header">
        <div class="top-header__klarna">
            <img class="top-header__klarna__logo" src="assets/klarna.svg" alt="klarna">
            <span class="top-header__klarna__slogan">Shop Now. Pay Later.</span>
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
            <svg class="bottom-header__logo-wrapper__logo" xmlns="http://www.w3.org/2000/svg" width="264" height="30" viewBox="0 0 211 20" fill="currentColor"><path d="M8.325 1.657c1.76 0 3.498.68 4.783 1.837l1.04-1.316C12.637.84 10.515 0 8.325 0 3.677 0 0 3.518 0 7.987s3.656 8.01 8.237 8.01c2.123 0 4.31-.815 5.867-2.064V8.17h-1.602v4.834c-1.217.84-2.73 1.34-4.15 1.34-3.61 0-6.522-2.815-6.522-6.353 0-3.539 2.886-6.333 6.495-6.333ZM26.216 8.714h7.968V7.057h-7.968V1.725h8.914V.045H24.413v15.884h11.01v-1.678h-9.207V8.714ZM55.586 9.394c0 3.132-1.806 4.946-4.806 4.946s-4.85-1.817-4.85-4.946V.044h-1.807v9.35c0 4.154 2.506 6.603 6.657 6.603 4.15 0 6.612-2.45 6.612-6.603V.044h-1.806v9.35ZM80.107 5.378c0-3.38-2.28-5.33-6.23-5.33h-6v15.884h1.806v-5.037h4.198c.36 0 .7-.023 1.016-.044l3.316 5.084h2.052l-3.723-5.422c2.28-.728 3.565-2.52 3.565-5.129v-.006Zm-6.23 3.836H69.68V1.725h4.198c2.866 0 4.49 1.272 4.49 3.698 0 2.425-1.624 3.788-4.49 3.788v.003ZM104.387 13.89 100.054.043h-1.806L93.963 13.89 89.63.044h-1.94l5.28 15.885h1.85l4.31-13.456 4.264 13.456h1.85L110.546.044h-1.871l-4.288 13.845ZM125.723 0c-3.088 0-5.743 1.57-7.169 3.945h-3.223v1.057h2.693a7.838 7.838 0 0 0-.568 2.493h-2.125v1.057h2.131c.062.88.264 1.72.588 2.493h-2.719v1.057h3.261c1.431 2.347 4.069 3.898 7.131 3.898 3.062 0 5.679-1.551 7.11-3.898h3.258v-1.057h-2.719a7.829 7.829 0 0 0 .588-2.493h2.131V7.495h-2.128a7.838 7.838 0 0 0-.568-2.493h2.693V3.945h-3.223C131.443 1.572 128.794 0 125.72 0h.003Zm0 1.678a6.45 6.45 0 0 1 4.923 2.264h-9.87a6.512 6.512 0 0 1 4.95-2.264h-.003Zm0 12.662a6.503 6.503 0 0 1-4.903-2.24h9.78a6.422 6.422 0 0 1-4.877 2.24Zm5.617-3.297h-11.267a6.251 6.251 0 0 1-.773-2.494h12.804a6.225 6.225 0 0 1-.764 2.494Zm-12.045-3.55c.07-.899.33-1.744.746-2.494h11.331c.41.75.665 1.592.735 2.493h-12.812ZM145.239.044h-1.806V15.93h8.732v-1.678h-6.926V.044ZM173.274.044h-2.143l-8.486 9.238V.044h-1.803V15.93h1.803v-4.15l3.071-3.404 5.819 7.554h2.213l-6.747-8.96 6.273-6.925ZM182.026 1.725h5.641v9.418c0 1.996-.969 3.064-2.708 3.064-1.217 0-2.459-.66-3.451-1.86l-.902 1.407c1.107 1.43 2.617 2.246 4.377 2.246 2.822 0 4.514-1.725 4.514-4.81V.044h-7.471v1.681ZM201.793 14.251V8.714h7.966V7.057h-7.966V1.725h8.914V.045h-10.72v15.884H211v-1.678h-9.207Z"></path></svg>
        </a>
        <nav class="bottom-header__nav">
            <?php render_nav_item('Lorem, ipsum.', [ 'abc' => 'https://youtube.com', 'def' => 'https://google.com' ]) ?>
            <?php render_nav_item('Lorem, ipsum.', [ 'abc' => 'https://youtube.com', 'def' => 'https://google.com' ]) ?>
            <?php render_nav_item('Lorem, ipsum.', [ 'abc' => 'https://youtube.com', 'def' => 'https://google.com' ]) ?>
            <?php render_nav_item('Lorem, ipsum.', [ 'abc' => 'https://youtube.com', 'def' => 'https://google.com' ]) ?>
            <?php render_nav_item('Lorem, ipsum.', [ 'abc' => 'https://youtube.com', 'def' => 'https://google.com' ]) ?>
        </nav>
        <div class="bottom-header__account">
            <a class="bottom-header__account__icon" href="login.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
            </a>
            <a class="bottom-header__account__icon" href="search.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
            </a>
            <a class="bottom-header__account__icon" href="shopping_cart.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
            </a>
            <div class="bottom-header__account__icon bottom-header__account__menu-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960" fill="currentColor"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </div>
        </div>
    </div>
</header>