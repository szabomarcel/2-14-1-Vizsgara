<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radiobuttons.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="Ameican Exprss">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            // echo $credit_card;
        }
        switch($credit_card){
            case "Visa":
                echo "You selected Visa";
                break;
            case "Visa":
                echo "You selected Visa";
                break;
            case "Visa":
                echo "You selected Visa";
                break;
            default:
                    echo "Please make a selection";
        }
        /*if($credit_card == "Visa"){
            echo "You selected Visa";
        }
        elseif($credit_card == "Mastercard"){
            echo "You selected Mastercard";
        }
        elseif($credit_card == "American Express"){
            echo "You selected American Express";
        }
        else{
            echo "Please make a selection";
        }*/
        /*else{
            echo "please make a selection";
        }*/
    }    

?>