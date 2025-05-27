<?php
$insert = FALSE;
parse_str(file_get_contents("php://input"), $_PUT);
if (!empty($_PUT['id']) && !empty($_PUT['name']) && !empty($_PUT['department'])) {

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "student_data"; // Fixed typo in database name
    
    $con = mysqli_connect($server, $username, $password, $db);
    if (!$con) {
        die("Connection unsuccessful<br>" . mysqli_error($connect));
    }
    $id = $_PUT['id'];
    $name = $_PUT['name'];
    $department = $_PUT['department'];

    $sql = "UPDATE student SET name='$name', department='$department' WHERE id='$id'";
    if ($con->query($sql) == TRUE) {
        $insert = TRUE;
    } else {
        echo "Error updating: " . $con->error; // Fixed typo in error message
    }
    $con->close();
} else {
    echo "Please enter information to update data";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Data</title>
</head>
<body>
    <form id="updateForm">
        <input type="text" name="id" id="id" placeholder="Enter your ID" required>
        <br>
        <input type="text" name="name" id="name" placeholder="Enter your Name" required>
        <br>
        <input type="text" name="department" id="department" placeholder="Enter your Department" required>
        <br>
        <button type="button" onclick="sendPutRequest()">Submit</button> 
    </form>

    <script>
        function sendPutRequest() {
            const formData = new FormData(document.getElementById('updateForm'));
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            fetch('put.php', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams(data),
            })
            .then(response => response.text())
            .then(data => alert(data))
            .catch(error => console.error('Error:', error));
        }
    </script>

    <?php
    if ($insert == TRUE) {
        echo "<p>Thank you for submitting the form</p>";
    }
    ?>
</body>
</html>