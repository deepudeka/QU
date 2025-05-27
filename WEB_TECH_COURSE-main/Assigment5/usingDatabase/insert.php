<?php
    include 'db.php';
   if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $department = $_POST['department'];

    $statement = $conn-> prepare("INSERT INTO student (id,name,department) VALUES (?,?,?) ");
    $statement -> bind_param("iss",$id,$name,$department);


    if($statement -> execute()){
        echo "Record Inserted successfully";
    }
    else
        echo "Unsuccessful Record".$statement->error;


    $statement ->close();
    $conn->close();
  }
?>