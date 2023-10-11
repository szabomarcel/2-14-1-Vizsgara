<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issetorempty.php">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="username"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $username = $_POST["password"];
        if(empty($username)){
            echo "Username is missing";
        }
        elseif(empty($username)){
            echo "Pasword is missing";
        }
        else{
            echo "Hello {$username}";
        }
    }
    /*foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }*/
    /*// $username = null;
    // $username = true;
    // $username = false;
    $username = "BroCode";
    if(isset($username)){
        echo "This variable is set";
    }
    else{
        echo "This variable is NOT set";
    }
    // echo isset($username);*/
?>