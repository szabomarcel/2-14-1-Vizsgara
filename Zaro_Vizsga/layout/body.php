<body>
    <div class="container">
        <?php 
            require_once("menu.php"); 
            switch ($menuItem) {
                case "fooldal":
                    require_once("fooldal.php");
                    break;
                /*case "regisztracio":
                    require_once("login_form.php");
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
                case "forras":
                    require_once("login/forraskod.php");
                    break;
                default:
                    echo 'fooldal.php';
                    break;
            }
        ?>
    </div>  
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>-->
</body>
</html>