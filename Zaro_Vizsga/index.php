<?php
    header('Content-Type; text/html; charset=UTF-8');
    session_start(); //-- munkamenet adatainak tárolására $_SESSION[]
    $menuItem = filter_input(INPUT_GET, "menuItem",FILTER_SANITIZE_SPECIAL_CHARS);
    require_once("layout/head.php");
    require_once("layout/body.php");
    require_once ("layout/menu.php");
    require_once './class/Database.php';
    $db = new mysqli("localhost", "root", "", "users");    
    if(!isset($_SESSION['login'])) {$_SESSION['login'] = false;}
?>    