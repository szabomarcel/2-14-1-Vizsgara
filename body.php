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
                case "autocard":
                    require_once("autocard.php");
                    break;    
                
                default:
                    echo 'Üdvözöllek!';
                    break;
            }
        ?>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>