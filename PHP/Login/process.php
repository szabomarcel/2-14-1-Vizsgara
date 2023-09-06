<?php
    // Ger values from form in login.php file
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    // $username = mysql_real_escape_string($username);
    // $password = mysql_real_escape_string($password);

    // Connect to te server and select database
    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    // Query the datebase for user
    $result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to query database " .mysql_error());
    $row = mysql_fetch_array($result);
    if($row["usernama"] == $username && $row["password"] == $password){
        echo "Login succes!!!  Welcome ".$row['usename'];
    }else{
        echo "Failed to login!";
    }
?>