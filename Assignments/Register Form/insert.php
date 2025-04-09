<?php
include'db_connect.php';
if($_SERVER['REQUEST_METHOD'] =="POST"){
  $name =$_POST['name'];
  $email =$_POST['email'];
  $password =$_POST['password'];
  $statement= $connect->prepare("INSERT INTO register_form (name, email, password) VALUES (?, ?, ?)");
   $statement->bind_param("sss",$name,$email,$password);
  if($statement->execute()) {
    echo "Registered Successfully";
}else{
  echo "Error".$statement->error;

}
$statement->close();
$connect->close();
}
?>