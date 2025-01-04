<?php

session_start();

@$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306); 

if($My_Connection->connect_error){
    echo 'Error: Could not connect to database. Please try again later.'; 
    exit; 
}

$query = "SELECT user_name, user_fullname, user_phone, user_school, user_github FROM USER WHERE user_id = ?";
$stmt = $My_Connection->prepare($query);
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($current_user_name, $current_user_fullname, $current_user_phone, $current_user_school, $current_user_github);
$stmt->fetch();
$stmt->close();

$user_name = $_POST['name'];
$user_fullname = $_POST['fullname'];
$user_phone = $_POST['phone'];
$user_school = (int) $_POST['options'];
$user_github = $_POST['github'];
$user_specialiti = isset($_POST['user_specialit']) ? array_map('intval', $_POST['user_specialit']) : [];
$see=false;

$query = "UPDATE USER SET ";
$types = ""; 
$params = []; 

if ($user_name !== $current_user_name && !empty($user_name)) {
    $query .= "user_name = ?, ";
    $types .= "s"; 
    $params[] = $user_name;
    $see=true;
}

if ($user_fullname !== $current_user_fullname && !empty($user_fullname)) {
    $query .= "user_fullname = ?, ";
    $types .= "s";
    $params[] = $user_fullname;
    $see=true;
}

if ($user_phone !== $current_user_phone && !empty($user_phone)) {
    $query .= "user_phone = ?, ";
    $types .= "s";
    $params[] = $user_phone;
    $see=true;
}

if ($user_school !== $current_user_school && !empty($user_school)) {
    $query .= "user_school = ?, ";
    $types .= "i";  
    $params[] = $user_school;
    $see=true;
}

if ($user_github !== $current_user_github && !empty($user_github)) {
    $query .= "user_github = ?, ";
    $types .= "s";
    $params[] = $user_github;
    $see=true;
}

if($see){
$query = rtrim($query, ', ') . " WHERE user_id = ?";
$types .= "i";
$params[] = $_SESSION['user_id'];

$stmt = $My_Connection->prepare($query);
$stmt->bind_param($types, ...$params);

$stmt->execute();

if (!empty($user_specialiti)) {
    $stmt = $My_Connection->prepare("INSERT INTO SPECIALITY_USER (user_id, speci_id) VALUES (?, ?)");

    foreach ($user_specialiti as $speci_id) {
        $stmt->bind_param("ii", $_SESSION['user_id'], $speci_id);
        $stmt->execute();
    }
}
}

header("Location: ../../html/personal/personalinfo.php");

