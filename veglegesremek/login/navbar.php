<nav class="navbar navbar-expand-lg navbar-light bg-light"> <!--fixed-top-->
    <a class="navbar-brand" href="index.php?menuItem=fooldal">Főoldal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
                //session_start();
                $menuItem = isset($_GET['menuItem']) ? $_GET['menuItem'] : '';
                echo '<li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'felhasznalo'?' active ': '') .'" href="index.php?menuItem=fooldal">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'atigazolas'?' active ': '') .'" href="index.php?menuItem=atigazolas">Átigazolási hírek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'felhasznalo'?' active ': '') .'" href="index.php?menuItem=felhasznalo">Felhasznalo részére</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'kwiz'?' active ': '') .'" href="index.php?menuItem=kwiz">Napi kwiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'csapat'?' active ': '') .'" href="index.php?menuItem=csapat">Csapatok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'foci'?' active ': '') .'" href="index.php?menuItem=foci">Mini Játék focival kapcsolatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'foci'?' active ': '') .'" href="index.php?menuItem=gol">Góllövések</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'foci'?' active ': '') .'" href="index.php?menuItem=tabella">Tabella</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'logout'?' active ': '') .'" href="index.php?menuItem=logout">Kijelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'forras'?' active' : '') .'" href="index.php?menuItem=forras">Forrás kódok</a>
                    </li>';
            ?>
        </ul>        
    </div>
    <i class="fi fi-rr-user"></i>					
    <form class="d-flex" role="search">        
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</nav>    
<script src="./bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>    