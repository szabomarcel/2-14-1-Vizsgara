<?php
    $db = new mysqli('localhost', 'root', '', 'youtube');
    $result = $db->query("SELECT * FROM logs");

    while($fetch = $result -> fetch_assoc()){
        $username = $fetch['username'];
        $logs = $fetch['logs'];
        $time = $fetch['Date'];
        $image = $fetch['image'];

        echo '<img src"image/' . $image . '"/>' . $username . ' - ' . $logs . ' ' . $time . '<br>';
    }
    $db -> close(); 
?>