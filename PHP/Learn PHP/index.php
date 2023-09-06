<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <form action="PHP-1/PHP/Learn PHP/proccess.php" method="post">
        Enter your name: <input name="name" type="text">
        <input type="submit">
    </form>
    <?php

        echo "Hello, World!\t";
        $myvar = "This is my variable";
        /*$number = 5;
        $number2 = 3;
        $sum = $myvar + $number2;*/
        $name = "Jake";
        echo "Hello, " . $name . "! ";

        // ($x !== $y or $x == $y)

        /*$loggedIn = false;
        if($loggedIn == true){
            echo "You are logged in";
        } else {
            echo "Please log in";
        }*/


    ?>

</body>
</html>