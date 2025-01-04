<?php 
session_start();

$entered_code = $_POST['code1'] . $_POST['code2'] . $_POST['code3'] . $_POST['code4'];
if ($entered_code == $_SESSION['OTP']) {
    unset($_SESSION['OTP']);
    header("Location: ../../html/authentification/setnewpass.php");
    exit();
} else {
    $_SESSION['error'] = "Does not match!";
    header("Location: ../../html/authentification/generatedcode.php");
    exit();
}