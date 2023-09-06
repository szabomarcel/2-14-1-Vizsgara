<?php
$price = 1.99;
?><!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USINGFORLOOPS</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Price for Multiple Packs</h2>
    <p>
        <?php
        /*for($i = 1; $i <= 10; $i++){
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }*/
        for($i = 10; $i <= 100; $i + 10){
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }        
        ?>
    </p>
</body>
</html>