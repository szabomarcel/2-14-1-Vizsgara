<?php 
$prefix = 'Thank you';
$name = 'Ivy';
$message = $prefix . ', ' . $name;
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operator</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $name?>' Order</h2>
    <p><?= $message ?></p>
</body>
</html>