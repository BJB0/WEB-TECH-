<?php
if  ($_SERVER['REQUEST_METHOD']== 'POST')
{
    $email= $_POST['email'];
    $password = $_POST['password'];
    echo "This  is post method";
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
<?php
if  (isset($_POST))
{
    $email= $_POST['email'];
    $password = $_POST['password'];

}
?>
    <form action="post.php" method="post">
    <label for="email">Email ID:</label>    
    <input type="email" name="email" id="email" placeholder = "Enter your Email Address">
    <br>
    <label for="password">Password</label>    
    <input type="password" name="password" id="password" placeholder = "Enter your password">
    <br>
    <button type="submit">Submit</button>    
</form>
</body>
</html>