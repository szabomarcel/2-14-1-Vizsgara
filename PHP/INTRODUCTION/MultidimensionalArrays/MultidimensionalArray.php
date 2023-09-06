<?php
$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
    ['name' => 'Mints', 'price' => 3, 'stock' => 66,],
    ['name' => 'Toffee', 'price' => 4, 'stock' => 97,],
]
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional</title>
</head>
<body>
    <h1>Ze Candy Store</h1>
    <h2>Offers</h2>
    <p><?php echo $offers[0]['name'];?> = $<?php echo $offers[0]['price'];?></p>
    <p><?php echo $offers[1]['name'];?> = $<?php echo $offers[1]['price'];?></p>
    <p><?php echo $offers[2]['name'];?> = $<?php echo $offers[2]['price'];?></p>
</body>
</html>