<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Check if user is logged in
if (!isset($_SESSION['club_id'])) {
    // Redirect to error page with a message
    $description = "You need to have a club account to access this page.";
    $baseurl = "../../html/";
    $redirect_url1 = "authentification/login.php"; // The URL to redirect users to log in
    $redirect_url2 = "home.php"; // The URL to redirect users to log in
    include '../../html/error.php';
    exit();
}


?>