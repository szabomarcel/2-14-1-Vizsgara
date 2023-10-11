<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mysop";

    // Create conection
    $connection = new mysqli($servername, $username, $password,$database);

    $sql = "SELECT FROM clients WHERE id=$id";
    $connection -> query($sql);
}
header("location: registralas.php"); 
exit;
?>