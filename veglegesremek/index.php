<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start(); //-- munkamenet adatainak tárolására $_SESSION[]
    require_once './class/Database.php';
    $db = new Database("localhost", "root", "", "regisztracio");        
    if(!isset($_SESSION['login'])) {$_SESSION['login'] = false;}
?>    
<body>
<?php
    $menuItem = filter_input(INPUT_GET, "menuItem", FILTER_SANITIZE_SPECIAL_CHARS);
    require_once("layout/head.php");
    require_once("login/navbar.php");
    require_once ("layout/menu.php");
    require_once ("layout/footer.php");
?>    
<script src="./bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>    
</body>