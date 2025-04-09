<?php
include'db_connect.php';
if($_SERVER['REQUEST_METHOD'] =="POST"){
  $First_name =$_POST['First_name'];
  $Last_name =$_POST['Last_name'];
  $DOB =$_POST['DOB'];
  $Nationality =$_POST['Nationality'];
  $Email =$_POST['Email'];
  $Address =$_POST['Address'];
  $statement= $connect->prepare("INSERT INTO student_details (First_name, Last_name, DOB, Nationality, Email, Address) VALUES (?, ?, ?, ?, ?, ?)");
   $statement->bind_param("ssssss",$First_name,$Last_name,$DOB,$Nationality,$Email,$Address);
  if($statement->execute()) {
    echo "Record inserted Successfully";
}else{
  echo "Error".$statement->error;

}
$statement->close();
$connect->close();
}
?>