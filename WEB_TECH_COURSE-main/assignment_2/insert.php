<?php
include'db_connect.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $First_name = $_POST['First_name'];
    $Last_name =$_POST['Last_name'];
    $Date_of_Birth =$_POST['Date_of_Birth'];
    $Nationality =$_POST['Nationality'];
    $Email =$_POST['Email'];
    $Address =$_POST['Address'];
    $statement = $connect->prepare("INSERT INTO student_details(First_name,Last_name, Date_of_Birth, Nationality,Email,Address) VALUES(?,?,?,?,?,?)");
    $statement->bind_param("ssssss",$First_name,$Last_name,$Date_of_Birth, $Nationality,$Email,$Address);
    if($statement->execute()){
        echo "Record insert successfully";
    }else{
        echo "Error" .$statement->error;
    }
    $statement->close();
    $connect->close();
}
?>