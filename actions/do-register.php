<?php

function validateData(array $data) 
{
    if (empty($data['name'])) {
        $_SESSION['errors']['name'] = 'Full name must not be empty';
        return false;
    } else if (empty($data['email'])) {
        $_SESSION['errors']['email'] = 'E-mail address must not be empty';
        return false;
    } else if (empty($data['password'])) {
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
        header('Location: /register.php');
        return;
    }

    // TODO: Logic to register user and redirects user back to login page
    //
} else {
    die("Not Authorized");
}