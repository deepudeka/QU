<?php
$data = json_decode(file_get_contents('students.json'), true);

$newStudent = [
    "id" => time(), // Unique ID using timestamp
    "name" => $_POST['name'],
    "department" => $_POST['department']
];

$data[] = $newStudent;

file_put_contents('students.json', json_encode($data, JSON_PRETTY_PRINT));

echo "Student added successfully!";
?>
