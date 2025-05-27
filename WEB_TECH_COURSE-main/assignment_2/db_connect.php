<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "student_db";
$connect = new mysqli($server_name, $user_name, $password, $db_name);
if($connect->connect_error)
{
    die("connection Failed" .$connect->connect_error);
}
?>