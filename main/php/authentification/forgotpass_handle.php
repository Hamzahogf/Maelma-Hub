<?php
session_start();

$email = $_POST['email'];
@$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306); 
$query="SELECT user_name FROM USER WHERE user_email = ?";
$stmt=$My_Connection->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows  > 0){
    $code = rand(1000, 9999);
    $_SESSION['OTP'] = $code;  
    $_SESSION['email']=$email;
    $command = escapeshellcmd("python ../../php/authentification/proced_code.py $email $code");
    $output = shell_exec($command);
    
    if (strpos($output, "Email sent successfully") !== false) {
            header("Location: ../../html/authentification/generatedcode.php");
            exit();
    } else {
            header("Location: ../../html/home.php");
    }
} else {
    $_SESSION['error'] = "Email does not exist!";
    header("Location: ../../html/authentification/forgotpass.php");
    exit();
}