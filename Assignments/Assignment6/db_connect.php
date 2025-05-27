<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "student_db";

    $connect = mysqli_connect($server,$username,$password,$db);

    if(!$connect)
    {
        die("Unsuccessful connection<br>");
    }


?>
