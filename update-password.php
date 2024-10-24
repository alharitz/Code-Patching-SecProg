<?php

if (session_status() === PHP_SESSION_NONE) session_start();

?>

<form action="actions/do-update-password.php" method="post">
    <div>
        <label for="password">New password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password-confirmation">Confirm new password</label>
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
        <button type="submit">Update Password</button>
        <br>
        <a href="/home.php">Back to home page</a>
    </div>
</form>