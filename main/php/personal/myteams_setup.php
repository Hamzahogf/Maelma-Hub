<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    error_log('Not logged in, redirecting to login page');
    header("Location: ../authentification/login.php");
    exit;
}

@$My_Coonection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306);
$query = " SELECT 
        u.user_name, 
        tm.team_id, 
        sp.speci_name, 
        r.role_name, 
        t.team_name,
        e.event_link
    FROM 
        TEAM_MEMBER tm
    JOIN 
        TEAM t ON tm.team_id = t.team_id
    JOIN 
        USER u ON tm.member_id = u.user_id
    JOIN 
        SPECIALITY sp ON tm.team_member_speciality = sp.speci_id
    JOIN 
        ROLE r ON tm.team_member_role = r.role_id
    JOIN
        EVENT e ON e.event_id=t.team_event
    WHERE 
        tm.team_id IN (
            SELECT 
                team_id 
            FROM 
                TEAM_MEMBER 
            WHERE 
                member_id = ?
        )
        ORDER BY 
        tm.team_id, u.user_id = ?;";
        
$stmt=$My_Coonection->prepare($query);
$stmt->bind_param('ii' , $_SESSION['user_id'],$_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($user_name,$team_id, $speci_name,$role_name, $team_name, $event_link);
$teamsat=[];

while ($stmt->fetch()) {
    $teamsat[] = implode(':*' ,  [
        htmlspecialchars($team_id ,ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($user_name, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($speci_name, ENT_QUOTES , 'UTF-8'),
        htmlspecialchars($role_name, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($team_name, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($event_link, ENT_QUOTES, 'UTF-8'),
    ]
    );
}

$teamsat= implode(';', $teamsat);

?>