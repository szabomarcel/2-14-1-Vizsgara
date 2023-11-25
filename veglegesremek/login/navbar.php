<nav class="navbar navbar-expand-lg navbar-light bg-light"> <!--fixed-top-->
    <a class="navbar-brand" href="index.php?menuItem=fooldal"><img src="kepek/pele-focilabda.svg" alt="pele-focilabda.svg" style="width: 30px; height: 30px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
                //session_start();
                //$menuItem = isset($_GET['menuItem']) ? $_GET['menuItem'] : '';
                echo '<li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'felhasznalo'?' active ': '') .'" aria-current="page href="index.php?menuItem=fooldal">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'atigazolas'?' active ': '') .'" aria-current="page href="index.php?menuItem=atigazolas">Átigazolási hírek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'kwiz'?' active ': '') .'" aria-current="page" href="index.php?menuItem=kwiz">Napi kwiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link'. ($menuItem == 'foci'?' active ': '') .'" aria-current="page" href="index.php?menuItem=foci">Mini Játék focival kapcsolatos</a>
                    </li>
                    <div class="dropdown">
                        <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                            <img src="kepek/navbar/man.png" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="nav-link'. ($menuItem == 'logout'?' active ': '') .'" aria-current="page" href="index.php?menuItem=felhasznalo">Profilom <img src="kepek/navbar/profile.png" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy"/></a>
                            </li>
                            <li>
                                <a class="nav-link'. ($menuItem == 'logout'?' active ': '') .'" aria-current="page" href="index.php?menuItem=logout">Kijelentkezés <img src="kepek/navbar/logout.png" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy"/></a>
                            </li>
                        </ul>
                    </div>';
            ?>				            
        </ul>                
    </div>    
</nav>    
<script src="./bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>    