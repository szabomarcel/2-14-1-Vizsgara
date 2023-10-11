<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forloops.php" method="post">
        <label>Enter a number to count down from: </label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php
    $counter = $_POST["counter"];

    for($i = $counter; $i > 0; $i--){
        echo $i . "<br>";
    }
    /*for($i =10;$i > 0;$i+=3){
        echo$i."<br>";
    }*/
?>