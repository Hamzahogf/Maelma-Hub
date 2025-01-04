<?php

function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

@$My_Connection=new mysqli('localhost', 'root', '', 'maelma_hub',3306);

if ($My_Connection->connect_error) {
    throw new Exception("Database connection failed");
}

$user_email=sanitize_input($_POST['email']);
$user_password=$_POST['password'];

$email_check_query = "SELECT user_id,user_password FROM USER WHERE user_email = ?";
$stmt=$My_Connection->prepare($email_check_query);
$stmt->bind_param('s', $user_email); 
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    $stmt->bind_result($user_id,$user_passwordd);
    $stmt->fetch();

    if($user_passwordd == $user_password){ 

        session_start();

        
        $_SESSION['user_id'] = $user_id;
        header("Location: ../../html/personal/personalinfo.php");
        exit;
    } else {
        header("Location: ../../html/home.php");
    }
} else { 
    @$My_Connection=new mysqli('localhost', 'root', '', 'maelma_hub',3306);
    if ($My_Connection->connect_error) {
        throw new Exception("Database connection failed");
    }
    $email_check_query = "SELECT club_id,club_password FROM CLUB WHERE club_email = ?";
    $stmt=$My_Connection->prepare($email_check_query);
    $stmt->bind_param('s', $user_email); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($club_id,$club_password);
        $stmt->fetch();

        if($club_password == $user_password){
            session_start();
    
            
            $_SESSION['club_id'] = $club_id;
            header("Location: ../../html/personal/clubinfo.php");
            exit;
        } else {
            header("Location: ../../html/authentification/login.php");
        }
       
    } else {
        header("Location: ../../html/authentification/login.php");
    }
} 
?>