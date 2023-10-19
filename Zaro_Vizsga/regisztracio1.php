<?php
    /*function validSzig($param) {
      $pattern = "/[1-9]{1}[0-9]{5}[A-Za-z]{2}/";
      echo '<pre>';
      var_dump("123", preg_match($pattern, "123"));
      var_dump("12356AA", preg_match($pattern, "123"));
      echo '</pre>';
      return preg_match($pattern, $param);
    }*/

    if(filter_input(INPUT_POST, "regisztraciosAdatok", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
        $pass1 = filter_input(INPUT_POST, "password");
        $pass2 = filter_input(INPUT_POST, "InputPassword2");
        $emailcim = filter_input(INPUT_POST, "email");
        $mennyiseg = filter_input(INPUT_POST, "mennyiseg");
        $igazolvanyszam = filter_input(INPUT_POST, "igazolvanyszam");
        $gender = filter_input(INPUT_POST, "gender");
        $jegyt = filter_input(INPUT_POST, "jegyt");
        $date = filter_input(INPUT_POST, "date");
        $name = htmlspecialchars(filter_input(INPUT_POST, "username"));
        var_dump($pass1, $pass2, $emailcim, $mennyiseg, $igazolvanyszam, $gender, $jegyt, $date, $name);
        if($pass1 != $pass2){
            echo '<p>Nem egyezik meg a jelszó</p>';
        }else{
            //-- regisztráció inditása
            $db -> register($pass1, $pass2, $emailcim, $mennyiseg, $igazolvanyszam, $gender, $jegyt, $date, $name);
            header("Location: index.php"); // Átvált a nyitólapra.
        }
    }    
?>
<div class="container">
    <form action="index.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Felhasználói név: </label>
          <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" minlength="3" maxlength="50" aria-describedby="emailHelp" required>
          <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="row">
          <div class="mb-3 col-7 has validation">
            <label for="emailcim" class="form-label">Email cim: </label>
            <input type="email" class="form-control" id="emailcim" minlength="1" name="emailcim" required>
          </div>
          <div class="mb-3 col-5">
            <label for="igazolvany" class="form-label">Igazolvanyszam: </label>
            <input type="text" class="form-control" id="igazolvany" name="igazolvany" pattern="[1-9]{1}[0-9]{5}[A-Za-z]{2}" maxlength="8" required>
          </div>
        </div>        
        <div class="row">
          <div class="mb-3 col-6">
            <label for="password" class="form-label">Jelszó: </label>
            <input type="password" class="form-control" id="password" name="password" pattern="[A-Za-z]{0,100}" minlength="2" required>
          </div>
          <div class="mb-3 col-6">
            <label for="InputPassword2" class="form-label">Jelszó: </label>
            <input type="password" class="form-control" id="InputPassword2" name="InputPassword2" pattern="[A-Za-z]{0,100}" minlength="2" required>
          </div>
        </div>
        <div class="kozepre">
      <h4>Mérközésekre a Jegyvásárlás</h4>
      <input type="checkbox" id="vehicle1" name="gender" value="Kecskemeti TE és Mezökövesd az ára 2000ft">
      <label for="vehicle1" name="vehicle1"> Kecskemeti TE és Mezökövesd az ára 2000ft</label><br><br>
      <input type="checkbox" id="vehicle2" name="gender" value="Puskás Akadémia és Paks az ára 2300ft">
      <label for="vehicle2" name="vehicle2"> Puskás Akadémia és Paks az ára 2300ft</label><br><br>
      <input type="checkbox" id="vehicle3" name="gender" value="Diósgyőri VTK és Debreceni VSC az ára 2500ft">
      <label for="vehicle3" name="vehicle3"> Diósgyőri VTK és Debreceni VSC az ára 2500ft</label><br><br>
      <input type="checkbox" id="vehicle4" name="gender" value="Újpest és MTK Budapest az ára 2100ft">
      <label for="vehicle4" name="vehicle4"> Újpest és MTK Budapest az ára 2100ft</label><br><br>
      <input type="checkbox" id="vehicle5" name="gender" value="Fehérvár FC és Zalaegerszeg az ára 1900ft">
      <label for="vehicle5" name="vehicle5"> Fehérvár FC és Zalaegerszeg az ára 1900ft</label><br><br>
      <input type="checkbox" id="vehicle6" name="gender" value="Ferencvárosi TC és Kisvárda az ára 2100ft">
      <label for="vehicle6" name="vehicle6"> Ferencvárosi TC és Kisvárda az ára 2100ft</label><br><br>
    </div>
    <div>
      <input type="checkbox" id="vehicle7" name="gender">
      <label for="vehicle7" name="vehicle7">Te egy robot vagy?</label>
    </div>
    <br>
    <div class="row g-3 align-items-center">
      <div class="mb-3 col-4">
        <label for="jegyt" name="jegyt" style="color:white;">Jegy típusa:</label>
        <select id="jegyt" name="jegyt">
          <option value="egyedi">Egyedi jegy</option>
          <option value="csoportos">Csoportos jegy</option>
        </select><br>
      </div>
      <div class="mb-3 col-4">
        <label for="mennyiseg" style="color:white;" pattern="[1-100]{1}" required>Mennyiség: </label>
        <input type="number" id="mennyiseg" name="mennyiseg" placeholder="mennyiseg" required><br>
      </div>
      <div class="mb-3 col-4">
          <div class="mb-3 col-auto">
            <label for="date" class="form-control" aria-describedby="dataHelpInline" required>Dátum:</label>
            <input type="date" id="date" name="date" placeholder="datum" required><br>
          </div>
        </div>
    </div><br>
        <button type="submit" class="btn btn-primary" name="regisztraciosAdatok" value="true">Regisztáció</button>
    </form>
</div>