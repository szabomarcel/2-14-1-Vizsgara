<?php
/*$products = [
    'Toffee' => 2.99,
    'Mints' => 1.99,
    'Fudge' => 3.49,
];*/
$best_sellers = ['Toffee', 'Mints', 'Fudge',]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUGHKEYS...VALUES</title>
</head>
<body>
    <h1>The Candy Store</h1>

    <!--<h2>Price List</h2>-->

    <h2>Best Sellers</h2>

    <!--<table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td><?= $price ?></td>
            </tr>
        <?php } ?>
    </table>-->

    <?php foreach($best_sellers as $products) { ?>
        <p><?= $products ?></p>        
    <?php } ?>
    
</body>
</html>