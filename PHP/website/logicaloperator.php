<?php
    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }
    echo "The ticket price is \${$price}";

    /*$age = 18;
    $citizen = false;

    if(!$age >= 18 || !$citizen){
        echo "You cannot vote";
    }
    else{
        echo "You can vote";
    }*/

    /*$age = 25;
    $citizen = true;

    if($age >= 18 && $citizen){
        echo "You can vote";
    }
    else{
        echo "You cannot vote";
    }*/
    /*$temp = 15;
    $cloudy = true;
    
    if($temp < 0 || $temp > 30){
        echo "Az idő jó.";
    }
    else{
        echo "Az idő rossz.";
    }

    if(!$cloudy){
        echo "Tt's sunny.";
    }
    else{
        echo "Tt's cloudy.";
    }*/
?>