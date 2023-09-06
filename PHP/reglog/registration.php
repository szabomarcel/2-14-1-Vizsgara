<?php
require 'config.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $usename = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmgpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($con, "SELECT * from tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate)){
        echo "<script> alert('Username or Email Has Already Taken'); </srcipt>";
    }
    else{
        if($password == $confirmgpassword){
            $query = "INSERT INTO tb_user VALUES('','$name', '$username', '$email', '$password')";
            mysqli_query($conn, $query);
            echo "<sript> alert('Registration Successful'); </script>";
            }
            else{
                echo "<script> alert('Password Does Not Match')";
            }
    }
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <form class = ""action="" method="post" autocomplete="off">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required value = ""> <br>
        <label for="Username">Username: </label>
        <input type="text" name="username" id="username" required value = ""> <br>
        <label for="email">Email: </label>
        <input type="text" name="email" id="email" required value = ""> <br>
        <label for="password">Password: </label>
        <input type="text" name="password" id="password" required value = ""> <br>
        <label for="confirmpassword">Confirm Password: </label>
        <input type="text" name="confirmpassword" id="confirmpassword" required value = ""> <br>
        <button type="submit" name="submit">Regiszter</button>
    </form>
    <br>
    <a href="login.php">Login</a>
</body>
</html>