<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validateinput.php">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        if(empty($age)){
            echo "That number wasn't valid";
        }
        else{
            echo "You are $age years old";
        }

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_INT);
        if(empty($age)){
            echo "That email wasn't valid";
        }
        else{
            echo "You email is: {$email}";
        }
        
        /*$username = filter_input(INPUT_GET, "username", 
                                FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age",
                            FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email",
                            FILTER_SANITIZE_EMAIL);

        echo "Hello {$username}";*/
    }
?>