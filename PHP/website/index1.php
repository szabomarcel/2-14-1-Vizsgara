<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index1.php" method="get">
        <!--<label>username: </label><br>
        <input type="text" name="username"><br>
        <label>password: </label><br>
        <input type="text" name="username"><br>
        <input type="submit" name="Log in">-->
        <label>quantity: </label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" name="total">
    </form>
</body>
</html>
<?php
    /*echo "{$_GET["username"]}" . "<br>";
    echo "{$_GET["password"]}" . "<br>"; */

    $item = "pizza";
    $price = 5.99;
    $quatity = $_POST["quantity"];
    $toral = null;
    $total = $quantity * $price;

    echo "You have ordered {$quantity} × {$item}/s";
    echo "Your total is: \${$total}";
?>