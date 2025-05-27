<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "student_db";

    $con = mysqli_connect($server,$username,$password,$db);

    if(!$con)
    {
        die("Unsuccessful connection<br>");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fetch_sql.php" method="post">
    <label for="id">Id :</label>
    <input type="text" name = "id" id = "id">
    <br>
    <label for="name">Name</label>
    <input type="text" name = "name" id = "name">
    <br>
    <label for="department">Department</label>
    <input type="text" name = "department" id = "department">
    <br>
    <button type="submit">Submit</button>

    </form>
</body>
</html>