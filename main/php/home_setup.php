<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=maelma_hub;port=3306', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

try {
    // Query to count users
    $userCountQuery = $pdo->query("SELECT COUNT(*) AS user_count FROM user");
    $userCount = $userCountQuery->fetch(PDO::FETCH_ASSOC)['user_count'];

    // Query to count clubs
    $clubCountQuery = $pdo->query("SELECT COUNT(*) AS club_count FROM club");
    $clubCount = $clubCountQuery->fetch(PDO::FETCH_ASSOC)['club_count'];

    // Query to count events
    $eventCountQuery = $pdo->query("SELECT COUNT(*) AS event_count FROM event");
    $eventCount = $eventCountQuery->fetch(PDO::FETCH_ASSOC)['event_count'];
} catch (PDOException $e) {
    die("Error fetching counts: " . $e->getMessage());
}
?>