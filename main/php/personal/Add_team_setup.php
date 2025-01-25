<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (!isset($_SESSION['user_id'])) {
    // Redirect to error page with a message
    $description = "You need to log in to perform this operation.";
    $baseurl = "../../html/";
    $redirect_url1 = "authentification/login.php"; // The URL to redirect users to log in
    $redirect_url2 = "home.php"; // The URL to redirect users to log in
    include '../../html/error.php';
    exit();
}

?>