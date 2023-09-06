<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Főoldal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <link href="flexnav.css" rel="stylesheet" type="fooldal/css"/>
    </head>
    <body>
        <div class="container">
            <header>
               Ez az oldal ahol minden me tud szerezni!
            </header>
            <nav>
                <a href="#" class="toggleNav">☰ Menü</a>
                <ul>
                    <li><a href="regisztalas.php" >Regisztráció</a></li>
                    <li><a href="#" >Menü-2</a></li>
                    <li><a href="#" >Menü-3</a></li>
                    <li><a href="#" >Menü-4</a></li>
                    <li class="logo"><a href="#" ><i class="fab fa-twitter"></i></a></li>
                    <li class="logo"><a href="#" ><i class="fab fa-facebook"></i></a></li>
                    <li class="logo"><a href="#" ><i class="fab fa-github"></i></a></li>
                    <li class="logo"><a href="#" ><i class="fab fa-instagram"></i></a></li>
                </ul>
            </nav>
            <div id="header">
                <div class="title">
                    Regisztráció
                    <div class="sub_title">
                        Tisztás Baptista Ifijúsági Tábor 2023
                    </div>
                </div>
                <div class="status_bar">
                    <div class="login_button"></div>
                </div>
                <div class="clear">
                </div>
            </div>
            <div id="menu"><div class="menu_point active" onclick="location.href='index.php?page=jelentkezes'">
                  Jelentkezési lap
                </div>
            </div>
    <div id="page">
            <footer>
                &COPY; Szabó Marcell és Tasnádi Richárd
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>

            $(function () {
                $('.toggleNav').on('click', function () {
                    $('nav ul').toggleClass('open');
                });
            });



        </script>
    </body>
</html>
