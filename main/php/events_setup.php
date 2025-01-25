<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

@$My_Connection=new mysqli('localhost', 'root', '', 'maelma_hub');

if ($My_Connection->connect_error) {
    header("Location: home.php");
    exit;
}

$query = "SELECT 
    e.event_id,
    e.event_name,
    e.event_location,
    e.event_start_date,
    et.type_name,
    c.club_id,
    c.club_name,
    c.club_photo,
    c.club_school as school_id,
    s.school_name
FROM EVENT e
LEFT JOIN CLUB c ON c.club_id = e.event_club
LEFT JOIN SCHOOL s ON s.school_id = c.club_school
LEFT JOIN EVENT_TYPE et ON et.type_id = e.type_event";

// Add WHERE clauses based on filters
$whereConditions = [];
$params = [];
$types = "";

if (isset($_GET['school_id']) && $_GET['school_id'] != 0 && $_GET['school_id'] != '') {
    $whereConditions[] = "c.club_school = ?";
    $params[] = $_GET['school_id'];
    $types .= "i";
}

if (isset($_GET['club_id']) && $_GET['club_id'] != 0 && $_GET['club_id'] !== ''  ) {
    $whereConditions[] = "c.club_id = ?";
    $params[] = $_GET['club_id'];
    $types .= "i";
}

if (isset($_GET['event_type_id']) && $_GET['event_type_id'] !== '' && $_GET['event_type_id'] != 0) {
    $whereConditions[] = "e.type_event = ?";
    $params[] = $_GET['event_type_id'];
    $types .= "i";
}

if (!empty($whereConditions)) {
    $query .= " WHERE " . implode(" AND ", $whereConditions);
}

$query .= " ORDER BY e.event_start_date DESC";

$stmt = $My_Connection->prepare($query);

if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();
$eventss = [];

while ($row = $result->fetch_assoc()) {
    if (isset($row['club_photo']) && substr($row['club_photo'], 0, 5) !== 'data:') {
        $row['club_photo'] = base64_encode($row['club_photo']);
        if ($row['club_photo']) {
            $row['club_photo'] = 'data:image/jpeg;base64,' . $row['club_photo'];
        } else {
            $row['club_photo'] = '../img/pfp/Snapchat11.jpg';
        }
    }
    $eventss[] = $row;
}


if (isset($_GET['school_id']) || isset($_GET['event_type_id'])  || isset($_GET['club_id'])) {
    header('Content-Type: application/json');
    echo json_encode($eventss);
    exit;
}