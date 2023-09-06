<?php
$day = 'Monday';

$offer = match($day){
    'Mondey' => '20% off chocolate',
    'Saturday', 'Sunday' => '20% of mints',
    default => '10% off your entire oder',
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Expression</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
</body>
</html>