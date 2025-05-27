<?php
$data = json_decode(file_get_contents('students.json'), true);

$idToUpdate = $_POST['id'];
$name = $_POST['name'];
$department = $_POST['department'];

foreach ($data as &$student) {
    if ($student['id'] == $idToUpdate) {
        $student['name'] = $name;
        $student['department'] = $department;
        break;
    }
}

file_put_contents('students.json', json_encode($data, JSON_PRETTY_PRINT));

echo "Student updated.";
?>
