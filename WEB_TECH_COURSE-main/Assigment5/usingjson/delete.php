<?php
$data = json_decode(file_get_contents('students.json'), true);
$idToDelete = $_GET['id'];

$data = array_filter($data, function($student) use ($idToDelete) {
    return $student['id'] != $idToDelete;
});

file_put_contents('students.json', json_encode(array_values($data), JSON_PRETTY_PRINT));

echo "Student deleted.";
?>
