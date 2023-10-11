<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        passwoerd: <br>
        <input type="password" name="passwoerd"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["username"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            /*echo $_SESSION["username"] . "<br>";
            echo $_SESSION["password"] . "<br>";*/

            header("Location: homes.php");
        }
        else{
            echo "Missing username/ password <br>";
        }
    }
    /*$_SESSION["username"] = "BorCode";
    $_SESSION["password"] = "pizza123";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";*/
?>