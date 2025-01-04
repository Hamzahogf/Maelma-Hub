<?php 
session_start();
@$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306); 

if($My_Connection->connect_error){
    echo 'Error: Could not connect to database. Please try again later.'; 
    exit; 
}

if (isset($_POST['name']) && isset($_POST['fullname']) && isset($_POST['options']) && isset($_POST['phone'])) {
    $_SESSION['user_name'] = $_POST['name'];
    $_SESSION['user_fullname'] = $_POST['fullname'];
    $_SESSION['user_school'] = (int)$_POST['options'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['specialities'] = array_map('intval', $_POST['club_specialit'] ?? []);
    
    header("Location: ../../html/authentification/signup1.php");
    exit();
} 

if (isset($_POST['email']) && isset($_POST['password'])){
    $_SESSION['user_email']=$_POST['email'];
    $_SESSION['user_password']=$_POST['password'];  

    // Check if the name already exists
    $email_check_query = "SELECT user_name FROM USER WHERE user_name = ?";
    $stmt = $My_Connection->prepare($email_check_query);
    $stmt->bind_param('s', $user_name);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<p>Try anothor name</p>";
        exit;  
    }


    // Check if the email already exists
    $email_check_query = "SELECT user_email FROM USER WHERE user_email = ?";
    $stmt = $My_Connection->prepare($email_check_query);
    $stmt->bind_param('s', $user_email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error']="already registered";
        header("Location: ../../html/authentification/signup1.php");
        exit;  
    }


    $query= "INSERT INTO `USER` ( `user_name`,  `user_fullname` , `user_school`, `user_email`, `user_password` , `user_phone`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt=$My_Connection->prepare($query);
    $stmt->bind_param('ssissi', $_SESSION['user_name'], $_SESSION['user_fullname'], $_SESSION['user_school'], $_SESSION['user_email'], $_SESSION['user_password'], $_SESSION['phone']);
    $stmt->execute();
    $stmt->close();

    @$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub'); 
    $query="SELECT user_id FROM USER WHERE user_email= ?";
    $stmt=$My_Connection->prepare($query);
    $stmt->bind_param('s', $_SESSION['user_email']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id);
    $stmt->fetch();
    $stmt->close();

    @$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub'); 
    $query="INSERT INTO `specialty_user` (`speci_id` ,`user_id`) VALUES (?,?)";
    $stmt=$My_Connection->prepare($query);
    foreach ($_SESSION['specialities'] as $speci_id) {
        $stmt->bind_param("ii", $speci_id,$user_id,);
        $stmt->execute();
    }
    unset($_SESSION['user_email']);
    unset($_SESSION['user_password']);
    unset($_SESSION['phone']);
    unset($_SESSION['user_school']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_fullname']);
    unset($_SESSION['specialities']);

    header("Location: ../../html/authentification/login.php");
}