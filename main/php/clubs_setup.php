<?php

session_start();

@$My_Connection=new mysqli('localhost', 'root', '', 'maelma_hub',3306);

if ($My_Connection->connect_error) {
    error_log('Error in connecting to the server');
    header("Location: ../html/home.php");
    exit;
}


$query = "SELECT c.club_name, c.club_photo, s.school_name, GROUP_CONCAT(sp.speci_name SEPARATOR ', ') AS specialities
          FROM CLUB c
          JOIN SCHOOL s ON s.school_id = c.club_school
          JOIN SPECIALITY_CLUB sc ON sc.club_id = c.club_id
          JOIN SPECIALITY sp ON sp.speci_id = sc.speci_id";

if (isset($_GET['school_id']) && !empty($_GET['school_id'])) {
    $school_id = $_GET['school_id'];
    if($school_id!=0){
        $query .= " WHERE c.club_school = ?";
    }
}

$query .= " GROUP BY c.club_id";

$stmt = $My_Connection->prepare($query);

if (isset($school_id) && $school_id!=0 ) {
    $stmt->bind_param("i", $school_id);
}

$stmt->execute();
$result = $stmt->get_result();
$clubss = [];

while ($row = $result->fetch_assoc()) {
    // Convert binary image data to base64
    if (isset($row['club_photo']) && substr($row['club_photo'], 0, 5) !== 'data:') {
        $row['club_photo'] = base64_encode($row['club_photo']);
        if ($row['club_photo']) {
            $row['club_photo'] = 'data:image/jpeg;base64,' . $row['club_photo'];
        } else {
            $row['club_photo'] = '../img/pfp/Snapchat11.jpg';
        }
    }
    $clubss[] = $row;
}

if (isset($_GET['school_id'])) {
    header('Content-Type: application/json');
    echo json_encode($clubss);
    exit;
}
