<?php

if (session_status() === PHP_SESSION_NONE) session_start();

session_destroy();

if (session_status() === PHP_SESSION_NONE) session_start();

header("Location: /index.php");
exit;