<?php
require 'config.php';

// If we get here without exit()ing, connect_error check passed
echo json_encode([
    "status" => "success",
    "message" => "Connected to database: " . $GLOBALS["config"]["database"]["name"],
    "mysql_version" => $conn->server_info
]);

$conn->close();
?>