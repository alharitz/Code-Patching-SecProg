<?php

function validateData(array $data) 
{
    if (empty($data['password'])) {
        $_SESSION['errors']['password'] = 'Password must not be empty';
        return false;
    } else if ($data['password'] !== $data['password_confirmation']) {
        $_SESSION['errors']['password_confirmation'] = 'Confirm password must be the same as inputted password';
        return false;
    }

    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!validateData($_POST)) {
        header('Location: /login.php');
        return;
    }

    // TODO: Logic to update user password
    //
} else {
    die("Not Authorized");
}