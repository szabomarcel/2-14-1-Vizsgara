<?php
    $conn = mysqli_connect('localhost', 'root', '', 'users');
    $conn = new PDO('mysql: host-localhost; users=' .$conn.';charset-utf8', $conn)
?>