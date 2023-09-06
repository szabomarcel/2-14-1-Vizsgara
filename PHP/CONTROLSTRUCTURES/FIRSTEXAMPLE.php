<?php
// 1 example IF...ELSE
if($logged_in === true){
    // Statements to run if condition is met
}
else{
    // Statements to run if condition not is met
}

// 2 example IF...ELSEIF
if($logged_in === true){
    // Statements to run if condition 1 met
}
else if ($tiem > 12){
    // Statements to run if condition 2 met
}
else{
    // Statements to run otherwise
}

// 3 example SWITCH
switch($option){
    case 'option_1':
        // Statemens to run go here
        break;
    case 'option_2':
        // Statemens to run go here
        break;
    default:
        // Statemens to run go here
}

// 4th example MATCH
$result = match($option){
    // 'option_1' => // Expression,
    // 'option_2', 'option_3' => // Expression,
    // 'degault' => // Expression,
};

?>