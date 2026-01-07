<?php
header("Content-Type: application/json");

// Lees JSON body van Shortcut
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Bouw response
$response = [
    "received" => true,
    "content" => $data["content"] ?? null,
    "timestamp" => date("c")
];

// Stuur JSON terug
echo json_encode($response);
