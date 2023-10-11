<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="whileloops.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>
<?php
    $seconds = 0;
    $running = true;

    while($running){

        if(isset($_POST["stop"])){
            $seconds = false;
        }
        else{
            // wait 1 second
            $seconds++;
            echo $seconds . "<br>";
        }
    }
    /*$counter = 0;
    while($counter <= 10){
        $counter++;
        echo $counter . "<br>";
    }*/
?>