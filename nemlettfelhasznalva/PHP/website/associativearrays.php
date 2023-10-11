<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associativearrays.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php
    $capitals = array("USA"=>"Washington D.C.",
                    "Japan"=>"Kyoto", 
                    "South Korea"=>"Seou", 
                    "India"=>"New Delhi");
    // $capital = $_POST["country"];
    // $capitals["USA"];
    $capital = $capitals[$_POST["country"]];
    echo "Te capital is {$capital}";
    
    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "BEijing";
    // $array_pop($capitals);
    // $array_shift($capitals);
    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals)
    // echo count($capitals);

    /*foreach($capitals as $key => $value){
        echo"{$key} = {$value}<br>";
    }*/
    /*foreach($keys as $key){
        echo"{$key} <br>";
    }*/
    /*foreach($values as $value){
        echo"{$value} <br>";
    }*/
?>