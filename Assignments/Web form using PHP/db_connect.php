<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "wt_student";
$connect = new mysqli($server_name, $user_name, $password, $db_name);
if($connect ->connect_error)
{
    die("connection failed". $connect->connect_error);
}

// echo("connected successfuly");
// $sql = "INSERT INTO student_details (id,first_name,last_name,department) VALUES('1','Bhargabjyoti','Bhuyan','CSE'),('2','Dhititman','Gogoi','CSE')";
// if($connect -> query($sql) === TRUE)
// {
//   echo "New record created successfully";
// }

// ?>    