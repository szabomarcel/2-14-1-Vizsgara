<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $foods = $_POST["foods"];
        
        foreach($foods as $food){
            echo $food . "<br>";
        }
        
        // echo $foods;
        /*if(isset($_POST["pizzas"])){
            echo "You like pizza! <br>";
        }
        if(isset($_POST["humberger"])){
            echo "You like humberger! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo "You like taco! <br>";
        }
        if(isset($_POST["pizzas"])){
            echo "You like DON'T pizza! <br>";
        }
        if(isset($_POST["humberger"])){
            echo "You like DON'T humberger! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like DON'T hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo "You like DON'T taco! <br>";
        }*/
    }
?>