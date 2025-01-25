<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start the session only if none is active
}

@$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
if($My_connection->connect_error){
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

$team_name=$_POST['team_name'];
$team_needed=$_POST['team_needed'];
$leader_speciality=(int) $_POST['leader_speciality'];
$team_specialit = array_map('intval', $_POST['team_specialit']); 
$event_id = $_GET['event_id'];
$user_id = $_SESSION['user_id'];

$user2=152;
$query = "SELECT member_id FROM TEAM_MEMBER WHERE member_id=?";
$stmt=$My_connection->prepare($query);
$stmt->bind_param('i', $user2);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows == 0){
    @$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
    $query=" INSERT INTO `TEAM` (`team_name`, `team_num_memb`, `team_event`, `team_owner`) VALUES (?,?,?,?)";
    $stmt=$My_connection->prepare($query);
    $stmt->bind_param('siii' , $team_name,  $team_needed, $event_id, $user_id);
    $stmt->execute();
    $team_id = $My_connection->insert_id;          // Retrieve the last inserted ID ; the insert_id property of the mysqli object after executing the statement

    @$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
    $query="INSERT INTO `SPECIALITY_TEAM` (`speci_id`,`team_id`) VALUES (?,?)";
    $stmt=$My_connection->prepare($query);
    foreach ($team_specialit as $speci_id) {
        $stmt->bind_param("ii", $speci_id, $team_id);
        $stmt->execute();
    }
    $member_role = 1;
    @$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
    $query=" INSERT INTO `TEAM_MEMBER` (`member_id`, `team_id`, `team_member_speciality`, `team_member_role`) VALUES (?,?,?,?)";
    $stmt=$My_connection->prepare($query);
    $stmt->bind_param('iiii' , $user_id,  $team_id, $leader_speciality, $member_role);
    $stmt->execute();
    $team_id = $My_connection->insert_id;    

    header("Location: ../../html/personal/myevents.php");

} else {
    header("Location: ../../html/personal/Add_Event.php");

}

