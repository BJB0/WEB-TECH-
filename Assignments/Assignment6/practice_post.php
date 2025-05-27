<?php
$insert = FALSE;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['department'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "student_db";

    $con = mysqli_connect($server, $username, $password, $db);
    if (!$con) {
        die("Connection failed<br>" . mysqli_connect_error());
    }

        $id = $_POST['id'];
        $name = $_POST['name'];
        $department = $_POST['department'];

        $sql = "INSERT INTO student (id, name, department) VALUES ('$id', '$name', '$department')";
        
        if ($con->query($sql) === TRUE) {
            $insert = TRUE;
        } else {
            echo "Unsuccessful: " . $con->error;
        }

        $con->close();
    }
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
    <form action="index.php" method="POST">
        <input type="text" name="id" id="id" placeholder="Enter your id">
        <br>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <br>
        <input type="text" name="department" id="department" placeholder="Enter your department">
        <br>
        <button type="submit">Submit</button> 
    </form>
    <?php
        if($insert == TRUE)
            echo "Thank you for submiting the form :) <br> Enjoy";
    ?>
</body>
</html>
