<?php

if (session_status() === PHP_SESSION_NONE) session_start();

function validateData(array $data) 
{
    if (empty($data['email'])) {
        $_SESSION['errors']['email'] = 'E-mail address must not be empty';
        return false;
    } else if (empty($data['password'])) {
        $_SESSION['errors']['password'] = 'Password must not be empty';
        return false;
    }

    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!validateData($_GET)) {
        header('Location: /login.php');
        return;
    }

    // TODO: Logic to get user, also if user exists, save to session and redirect to home page
    //
} else {
    die("Not Authorized");
}