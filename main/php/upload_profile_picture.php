<?php
// Disable error reporting for JSON responses
error_reporting(0);
ini_set('display_errors', 0);

session_start();

// Set the response content type to JSON
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_FILES['profile_picture'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
    exit;
}

try {
    $file = $_FILES['profile_picture'];
    
    // Validate file upload
    if ($file['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('File upload failed');
    }

    // Validate file type
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime_type = finfo_file($finfo, $file['tmp_name']);
    finfo_close($finfo);

    if (!in_array($mime_type, $allowed_types)) {
        throw new Exception('Invalid file type');
    }

    // Validate file size (5MB max)
    if ($file['size'] > 5 * 1024 * 1024) {
        throw new Exception('File size too large');
    }

    // Read file as binary
    $image = file_get_contents($file['tmp_name']);
    $user_id = $_SESSION['user_id'];

    // Create database connection
    $My_connection = new mysqli('localhost', 'root', '', 'maelma_hub');
    
    if ($My_connection->connect_error) {
        throw new Exception('Database connection failed');
    }

    // Prepare statement with explicit BLOB type
    if(isset($_SESSION['club_id'])){
        $stmt = $My_connection->prepare("UPDATE CLUB SET club_photo = ? WHERE club_id = ?");
    }else {
        $stmt = $My_connection->prepare("UPDATE USER SET user_photo = ? WHERE user_id = ?");

    } 

    // Bind parameters with explicit BLOB type
    $null = NULL; // Required for BLOB
    if (!$stmt->bind_param('si', $image, $user_id)) {
        throw new Exception('Binding parameters failed: ' . $stmt->error);
    }
    
    if (!$stmt->execute()) {
        throw new Exception('Failed to update profile picture: ' . $stmt->error);
    }

    $stmt->close();
    $My_connection->close();

    echo json_encode([
        'success' => true,
        'message' => 'Profile picture updated successfully!'
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>