<?php
$date = date("1");

switch($date){
    case "Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "It is Taco Tuesday!";
        break;
    case "Wednesday":
        echo "The work week is hald over!";
        break;
    case "Thursday":
        echo "It's almost the weekwnd!";
        break;
    case "Friday":
        echo "The weekwnd is here!";
        break;
    case "Saturday":
        echo "Time to party!";
        break;
    case "Sunday":
        echo "Time to relax";
        break;
    default:
        echo "{$date} is not a day";
}

/*$grade = "Pizza";

switch($grade){
    case "A":
        echo "You did great";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did okay";
        break;
    case "D":
        echo "You did poorly";
        break;
    case "F":
        echo "You did failed";
        break;
    default:
        echo "{$grade} is not valid" ;
}*/
?>