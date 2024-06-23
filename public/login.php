<?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        echo 'Your email is: ' . $_POST['email'] . '<br>';
        echo 'Your password is: ' . $_POST['password'];
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mick's Webshop - Account Login</title>
    <?php require_once 'components/base_head.php' ?>
    <link rel="stylesheet" href="scss/pages/login.css">
</head>
<body>
    <?php include_once 'components/header.php' ?>
    <main class="main">
        <h1 class="main__login-text">Login</h1>
        <form class="main__login" method="POST">
            <label for="email">E-mail <span class="required">*</span></label>
            <input type="email" id="email" name="email" placeholder="example@email.com" required>
            <label for="email">Password <span class="required">*</span></label>
            <input type="password" id="password" name="password" placeholder="Your password" required>
            <a class="main__login__forgot-password" href="#">Forgot password?</a>
            <hr class="main__login__separator">
            <button class="black-button" type="submit">Login</button>
        </form>
    </main>
    <?php include_once 'components/footer.php' ?>
</body>
</html>