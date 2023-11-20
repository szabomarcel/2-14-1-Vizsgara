<body>
<!--<div class="container">-->
    <?php 
        switch ($menuItem) {
            case "fooldal":
                require_once("./layout/fooldal.php");
                break;
            case "atigazolas":
                require_once("./login/atigazolas.php");
                break;   
            case "kwiz":
                require_once("./login/kviz.php");
                break;     
            case "csapat":
                require_once("./login/csapatok.php");
                break;    
            case "foci":
                require_once("#.php");
                break;
            case "felhasznalo":
                require_once("./login/felhasznalo.php");
                break;      
            case "forras":
                require_once("./login/forraskod.php");
                break;
            case "login":
                require_once("./login/login.php");
                break;
            case "logout":
                require_once("./login/logout.php");
                break;          
            /*case "vendeg":
                require_once("./login/vendeg.php");
                break;*/  
            case "tabella":
                require_once("./login/tabella.php");
                break;      
            case "gol":
                require_once("./login/gollovolista.php");
                break;  
            /*case "register":
                require_once("./login/regisztracio.php");
                break;*/
            default:
            require_once('./layout/fooldal.php');
        }            
    ?>    
</body>
