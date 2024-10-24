<?php

if (session_status() === PHP_SESSION_NONE) session_start();

?>

<div>
    <span>Welcome, <?= $_SESSION['user']['name']; ?></span>
</div>
<br>
<div>
    <div><a href="/update-profile.php">Update Profile</a></div>
    <div><a href="actions/do-logout.php">Log out</a></div>
    <br><br>
    <div><a href="actions/do-delete-my-account.php">Delete my account</a></div>
</div>