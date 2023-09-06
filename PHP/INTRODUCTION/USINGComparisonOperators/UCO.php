<?php
$item = 'Chocolate';
$stock = 5;
$wanted = 8;
// $can_buy = ($wanted <= $stock);
// USING LOGICAL OPERATORS
$deliver = true;
$can_buy = ($wanted <= $stock) && ($deliver == true);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCO</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Item: <?= $item ?></p>
    <p>Stock: <?= $stock ?></p>
    <p>Wanted: <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>
</body>
</html>