<?php
// config.php

$GLOBALS["config"] = [

    "database" => [
        "host" => "localhost",
        "name" => "floortodoor",
        "user" => "root",
        "pass" => "mySQLEthan",          
        "port" => 3307
    ]

];

$conn = new mysqli(
    $GLOBALS["config"]["database"]["host"],
    $GLOBALS["config"]["database"]["user"],
    $GLOBALS["config"]["database"]["pass"],
    $GLOBALS["config"]["database"]["name"],
    $GLOBALS["config"]["database"]["port"]
);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "timestamp" => round(microtime(true) * 1000),
        "data" => "Database connection failed"
    ]);
    exit();
}

?>