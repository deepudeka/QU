<?php
// Simulate saving user
$data = $_POST;
file_put_contents("users.json", json_encode($data, JSON_PRETTY_PRINT));
echo "Registered successfully!";
?>
