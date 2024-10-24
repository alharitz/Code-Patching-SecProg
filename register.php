<?php

if (session_status() === PHP_SESSION_NONE) session_start();

?>

<form action="actions/do-register.php" method="post">
    <div>
        <label for="name">Full name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">E-mail address</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password-confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password-confirmation">
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
        <button type="submit">Register</button>
        <br>
        <a href="/login.php">Already have an account? Click here to login.</a>
    </div>
</form>