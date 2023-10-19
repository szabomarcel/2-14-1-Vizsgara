<?php
if (filter_input(INPUT_POST,
                'belepesiAdatok',
                FILTER_VALIDATE_BOOLEAN,
                FILTER_NULL_ON_FAILURE)) {
    //-- A kapott adatok feldolgozása    
    $username = htmlspecialchars(filter_input(INPUT_POST, 'name'));

    $pass = htmlspecialchars(filter_input(INPUT_POST, 'password'));
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $db->login($email, $username, $pass);

    if ($db->login($email, $username, $pass)) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = '';
        $_SESSION['password'] = '';
    }
}
?>
<div class="container">
    <form action="index.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-2">
                    <label for="email" class="form-label">Email cím</label>
                    <input type="text" class="form-control" id="email" name="email" minlength="1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <label for="name" class="form-label">Felhasználó név</label>
                    <input type="text" class="form-control" id="name" name="name" minlength="5" maxlength="50" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <label for="password" class="form-label">Jelszó</label>
                    <input type="password" class="form-control" id="password" minlength="2" name="password">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="belepesiAdatok" value="true">Belépés</button>
    </form>
</div>