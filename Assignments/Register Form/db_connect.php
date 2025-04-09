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
