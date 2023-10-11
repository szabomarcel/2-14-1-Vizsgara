<?php
    @include 'config.php';
    if(!isset($_SESSION['user_name'])){
        header('location: login_form.php'); 
    }
?>
<div class="container">
    <div class="conten">
        <h3> hi <span>user</span></h3>
        <h1> Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
        <p>this is an user page</p>
        <a href="login_form.php" class="btn">Belépés</a>
        <a href="regisztracio.php" class="btn">Regisztráció</a>
        <a href="logout.php" class="btn">Kijelentkezés</a>
    </div>
</div>