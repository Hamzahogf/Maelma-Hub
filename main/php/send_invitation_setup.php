<?php 
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: ../html/authentification/login.php");
    exit();
}

$team_id=$_POST['team_id'];
$event_id=$_POST['event_id'];
$user_id=$_SESSION['user_id'];

@$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
$query = "SELECT * FROM INVITATION_TEAM WHERE member_id=? AND team_id=?";
$stmt=$My_connection->prepare($query);
$stmt->bind_param('ii', $user_id, $team_id);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows == 0){

    $My_Connection=new mysqli('localhost','root','','maelma_hub');
    $query="INSERT INTO `invitation_team` (`member_id`, `team_id`) VALUES (?,?)";
    $stmt=$My_Connection->prepare($query);
    $stmt->bind_param('ii' , $_SESSION['user_id'], $team_id);
    $stmt->execute();
    $stmt->close();

    header("Location: ../html/eventoverview.php?event_id=$event_id");
}