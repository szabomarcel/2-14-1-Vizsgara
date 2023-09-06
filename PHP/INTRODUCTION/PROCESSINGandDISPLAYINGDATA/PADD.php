<?php
    $username = 'Ivy';
    $greeting = 'Hello,' . $username . '.';
    $offer = [
        'item' => 'Chocolate',
        'gty' => 5,
        'price' => 5,
        'discount' => 4,
    ];
    $usual_price = $offer['gty'] * $offer['price'];
    $offer_price = $offer['gty'] * $offer['discount'];
    $saving = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Candy Store</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Multi-buy Offer</h2>
    <p><?= $greeting ?></p>
    <p class="sticker">Save $<?= $saving ?></p>
    <p>Buy <?= $soffer['qty'] ?> packs of <?= $offer['item'] ?> for $<?php $offer_price?><br>(usual price $<?= $usual_price?>)</p>
</body>
</html>