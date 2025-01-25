<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to error page with a message
    $description = "You need to log-in to perform this operation.";
    $baseurl = "../../html/";
    $redirect_url1 = "authentification/login.php"; // The URL to redirect users to log in
    $redirect_url2 = "home.php"; // The URL to redirect users to log in
    include '../../html/error.php';
    exit();
}


@$My_Connection=new mysqli('localhost', 'root', '', 'maelma_hub',3306);

if ($My_Connection->connect_error) {
    error_log('Error in connecting to the server');
    header("Location: home.php");
    exit;
}
$query= "SELECT club_id
        FROM CLUB_MEMBER
        WHERE user_id = ? AND club_id = ?";

$stmt = $My_Connection->prepare($query);
$stmt->bind_param('ii', $_SESSION["user_id"], $club_id2);
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows == 0){
    @$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
    $query=" INSERT INTO `invitation_club` (`club_id`,`user_id`) VALUES (?,?)";
    $stmt=$My_connection->prepare($query);
    $stmt->bind_param('ii' , $club_id,  $_SESSION['user_id']);
    $stmt->execute();

    header("Location: ../../html/personal/myevents.php");

} else {
    header("Location: ../../html/personal/Add_Event.php");

}


?>
