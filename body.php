<body>
    <div class="container">
        <?php 
            require_once("menu.php"); 
            switch ($menuItem) {
                case "fooldal":
                    require_once("fooldal.php");
                    break;
                case "regisztracio":
                    require_once("regisztracio.php");
                    break;
                case "atigazolas":
                    require_once("atigazolas.php");
                    break;   
                case "kwiz":
                    require_once("kviz.php");
                    break;     
                case "csapat":
                    require_once("csapatok.php");
                    break;     
                case "foci":
                    require_once("#.php");
                    break;     
                case "forras":
                    require_once("forraskod.php");
                    break;
                default:
                    echo 'Üdvözöljük az oldalunkon!';
                    break;
            }
        ?>
    </div>  
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>-->
</body>
</html>