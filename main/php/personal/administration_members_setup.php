<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$My_Connection = new mysqli('localhost','root','','maelma_hub');
$query="SELECT 
        u.user_name, 
        cm.joined_since, 
        u.user_fullname, 
        u.user_photo, 
        sc.school_name, 
        GROUP_CONCAT(s.speci_name SEPARATOR ', ') AS specialities, 
        r.role_name, 
        d.dept_name
    FROM 
        CLUB_MEMBER cm 
    JOIN 
        USER u ON u.user_id = cm.member_id
    JOIN 
        SCHOOL sc ON sc.school_id = u.user_school
    JOIN 
        SPECIALTY_USER su ON su.user_id = u.user_id
    JOIN 
        SPECIALITY s ON s.speci_id = su.speci_id
    JOIN 
        ROLE r ON r.role_id = cm.club_member_role
    JOIN 
        DEPARTEMENT d ON d.dept_id = cm.club_member_dept
    WHERE 
        cm.club_id = ?
    GROUP BY 
        cm.member_id;"
;
$stmt = $My_Connection->prepare($query);
$stmt->bind_param('i',$_SESSION['club_id']);
$stmt->execute();
$result = $stmt->get_result();
$memberss = [];
while ($row = $result->fetch_assoc()) {
    if (isset($row['user_photo']) && substr($row['user_photo'], 0, 5) !== 'data:') {
        $row['user_photo'] = base64_encode($row['user_photo']);
        if ($row['user_photo']) {
            $row['user_photo'] = 'data:image/jpeg;base64,' . $row['user_photo'];
        } 
    }
    $memberss[] = $row;
}
