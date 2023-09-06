<?php
    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }
    echo hypotenuse(3, 4);
    /*function is_even($number){
        return $number % 2;
    }

    is_even(10);*/
    /*function happy_birthday($first_name, $age){
        echo "Happy birday dear {$first_name}! <br>";
        echo "Happy birday to your! <br>";
        echo "Happy birday dear {$first_name}! <br>";
        echo "Youe are {$age} years old! <br><br>";
    }

    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35);
    happy_birthday("Squidward", 45);*/

?>