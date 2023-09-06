<?php
    $password = "pizza123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash;
    //if(password_verify("hamburger666", $hash)){ Ha elrontotad akkor újra kell írnod.
    if(password_verify("pizza123", $hash)){
        echo "You are logged in!";
    }
    else{
        echo "Incorrect password!";
    }
?>