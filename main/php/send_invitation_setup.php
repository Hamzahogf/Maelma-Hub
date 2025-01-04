<?php 
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: ../html/authentification/login.php");
    exit();
}

$team_id=$_POST['team_id'];
$event_id=$_POST['event_id'];

$My_Connection=new mysqli('localhost','root','','maelma_hub');
$query="INSERT INTO `invitation_team` (`member_id`, `team_id`) VALUES (?,?)";
$stmt=$My_Connection->prepare($query);
$stmt->bind_param('ii' , $_SESSION['user_id'], $team_id);
$stmt->execute();
$stmt->close();

header("Location: ../html/eventoverview.php?event_id=$event_id");