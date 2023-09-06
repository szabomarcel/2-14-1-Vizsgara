<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <?php
    
        $name = $_PSOT["name"];
        echo "Hello, " . $name;

        $people = array("Alice", "Bob", "Catherine");
        echo $people;

        $numbers = array(5, 3, 7);
        $sum = 0;
        foreach($numbers as $number){
            $sum = $sum + $number;
        }
        echo $sum;
        /*
        foreach($people as $person){
            echo $person . ' ';
        }*/

    ?>
</body>
</html>