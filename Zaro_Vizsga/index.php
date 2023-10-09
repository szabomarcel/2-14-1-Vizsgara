<?php
    header('Content-Type; text/html; charset=UTF-8');
    $menuItem = filter_input(INPUT_GET, "menuItem",FILTER_SANITIZE_SPECIAL_CHARS);
    require_once("layout/head.php");
    require_once("layout/body.php");
?>