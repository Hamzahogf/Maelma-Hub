<?php

session_start();

@$My_Connection=new mysqli('localhost', 'root', '', 'maelma_hub',3306);

if ($My_Connection->connect_error) {
    error_log('Error in connecting to the server');
    header("Location: home.php");
    exit;
}


$query = "SELECT p.post_title, p.post_body, p.post_photo, p.post_num_comments, p.post_date , c.club_name
          FROM POST p
          JOIN CLUB c ON p.post_owner = c.club_id"
;

$stmt = $My_Connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$blogss = [];

while ($row = $result->fetch_assoc()) {
    if (isset($row['post_photo']) && substr($row['post_photo'], 0, 5) !== 'data:') {
        $row['post_photo'] = base64_encode($row['post_photo']);
        if ($row['post_photo']) {
            $row['post_photo'] = 'data:image/jpeg;base64,' . $row['post_photo'];
        } else {
            $row['post_photo'] = '../img/pfp/Snapchat11.jpg';
        }
    }
    $blogss[] = $row;
}
?>