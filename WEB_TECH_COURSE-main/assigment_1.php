<!-- Question 1-->

<?php
// Declare variables of different data types
$integer = 10;
$float = 20.5;
$string = "Hello, World!";
$boolean = true;
$array = array("Apple", "Banana", "Cherry");
$details = ["name"=>"Dhitiman", "rollno"=>"CSB22046","course"=>"WT"];

// Display their contents using echo and var_dump
echo "<h3>Using echo:</h3>";
echo "Integer: $integer<br>";
echo "Float: $float<br>";
echo "String: $string<br>";
echo "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";
echo "Array: " . implode(", ", $array) . "<br>";

// echo "<h3>Using var_dump:</h3>";
 echo "Integer: ";
 var_dump($integer);
// echo "<br>Float: ";
// var_dump($float);
// echo "<br>String: ";
// var_dump($string);
// echo "<br>Boolean: ";
// var_dump($boolean);
echo "<br>Array: ";
var_dump($array);
echo "<br>Details: ";
echo $details["name"];
?>

<!-- Question 2-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP title Update 27/01/25</title>
</head>
<body>
    <h1>Welcome to PHP Variable basics</h1>
</body>
</html>

<!-- Question 3-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Roll Numbers</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Student Roll Numbers</h2>
    <?php
    // Array of students with names and roll numbers
    $students = [
        ["name" => "John", "roll_no" => 21300],
        ["name" => "Hari", "roll_no" => 21301],
        ["name" => "Marry", "roll_no" => 21302],
    ];

    // Display student names and roll numbers in a table
    echo "<table>";
    echo "<tr><th>Name of Student</th><th>Roll Number</th></tr>";
    foreach ($students as $student) {
        echo "<tr><td>{$student['name']}</td><td>{$student['roll_no']}</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>




