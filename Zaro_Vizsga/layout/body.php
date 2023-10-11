<body>
    <div class="container">
        <?php 
            require_once("menu.php"); 
            switch ($menuItem) {
                case "fooldal":
                    require_once("fooldal.php");
                    break;
                /*case "regisztracio":
                    require_once("login.php");
                    break;*/
                case "atigazolas":
                    require_once("login/atigazolas.php");
                    break;   
                case "kwiz":
                    require_once("login/kviz.php");
                    break;     
                case "csapat":
                    require_once("login/csapatok.php");
                    break;    
                case "foci":
                    require_once("#.php");
                    break;
                case "felhasznalo":
                    require_once("felhasznalo.php");
                    break;      
                case "forras":
                    require_once("login/forraskod.php");
                    break;
                case "login":
                    require_once("login/login.php");
                    break;
                case "logout":
                    require_once("login/logout.php");
                    break;          
                case "vendeg":
                    require_once("login/vendeg.php");
                    break;  
                case "register":
                    require_once("login/regisztracio.php");
                    break;  
                default:
                    require_once('fooldal.php');
                    break;
            }
        ?>
    </div>  
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>-->
</body>
</html>