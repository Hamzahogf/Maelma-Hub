<?php

session_start();
$user_pass=$_POST['password'];
$My_Connection=new mysqli('localhost','root','','maelma_hub',3306);
$query="UPDATE USER SET user_password = ? WHERE user_email= ?";
$stmt=$My_Connection->prepare($query);
$stmt->bind_param('ss', $user_pass,$_SESSION['email']);
$stmt->execute();
unset($_SESSION['email']);
header("Location: ../../html/authentification/login.php");