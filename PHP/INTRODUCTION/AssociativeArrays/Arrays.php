<?php
/*$member = [
 'name' => 'Ivy',
 'age' => 32,
 'coubtry' => 'Italy',
];*/
$nutrution = [
    'fat' => 16,
    'sugar' => 51,
    'salt' => 6.3,
];
// Updating arrays
$nutrution['fat'] = 36;
$nutrution['fiber'] = 2.1;
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating & Accessing associative arrays</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <p>Fat:   <?php echo $nutrution['fat'];?></p>
    <p>Sugar: <?php echo $nutrution['sugar'];?></p>
    <p>Salt:  <?php echo $nutrution['salt'];?></p>
    <p>Fiber:  <?php echo $nutrution['fiber'];?></p>
</body>
</html>