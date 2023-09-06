<?php
/*do{
    echo $counter;
    $counter++;
}while($counter < 10);*/
$packs = 5;
$price = 1.99;
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO...WHiLE...LOOPS</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Price for Multiple Packs</h2>
    <p>
        <?php
        do{
            echo $packs;
            echo 'packs cost $';
            echo $price * $packs;
            echo '<br>';
            $packs--;
        }while($packs > 0);
        ?>
    </p>
</body>
</html>