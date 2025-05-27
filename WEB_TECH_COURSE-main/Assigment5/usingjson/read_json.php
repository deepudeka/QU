<?php
$data = json_decode(file_get_contents('students.json'), true);

echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Department</th></tr>";
foreach ($data as $student) {
    echo "<tr>
            <td>{$student['id']}</td>
            <td>{$student['name']}</td>
            <td>{$student['department']}</td>
          </tr>";
}
echo "</table>";
?>
