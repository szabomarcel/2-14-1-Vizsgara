<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php?menuItem=fooldal">Főoldal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php?menuItem=fooldal">Főoldal</a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" href="index.php?menuItem=regisztracio">Jegyvásárlás</a>
            </li>-->
            <?php
                if (isset($_SESSION['login'])){                    
                    echo '<li class="nav-item">
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
                            <a class="nav-link'. ($menuItem == 'logout'?' active ': '') .'" href="index.php?menuItem=logout">Kijelentkezés</a>
                        </li>';
                }else{
                    echo '
                        <li class="nav-item">
                            <a class="nav-link'. ($menuItem == 'vendeg'?' active ': '') .'" href="index.php?menuItem=vendeg">Vendeg</a>
                        </li>'
                        .'<li class="nav-item">
                            <a class="nav-link'. ($menuItem == 'login'?' active ': '') .'" href="index.php?menuItem=login">Belépés</a>
                        </li>'
                        .'<li class="nav-item">
                            <a class="nav-link'. ($menuItem == 'register'?' active ': '') .'" href="index.php?menuItem=register">Regisztráció</a>
                        </li>';
                }
                var_dump($_SESSION['login']);
            ?>
            <!--<li class="nav-item">
                <a class="nav-link" href="index.php?menuItem=atigazolas">Átigazolási hírek</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?menuItem=kwiz">Napi kwiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?menuItem=csapat">Csapatok</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?menuItem=foci">Mini Játék focival kapcsolatos</a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link <?php echo ($menuItem == 'forras'?' active' : '');?>" href="index.php?menuItem=forras">Forrás kódok</a>
            </li>
        </ul>
    </div>
</nav>