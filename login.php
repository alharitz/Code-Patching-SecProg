<?php

if (session_status() === PHP_SESSION_NONE) session_start();

?>

<form action="actions/do-login.php" method="get">
    <div>
        <label for="email">E-mail address</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <?php
        if (!empty($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $key => $value) {
        ?>
                <label for="" style="color: red;"><?= $value; ?></label>
        <?php
                break;
            }
        }
        ?>
    </div>
    <div>
        <button type="submit">Login</button>
        <br>
        <a href="/register.php">Do not have account yet? Click here to register</a>
    </div>
</form>