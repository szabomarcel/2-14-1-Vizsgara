<body>
    <div class="container">
        <?php 
            require_once("menu.php"); 
            switch ($menuItem) {
                case "home":
                    require_once("home.php");
                    break;
                case "szabomarcell":
                    require_once("szabomarcell.php");
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