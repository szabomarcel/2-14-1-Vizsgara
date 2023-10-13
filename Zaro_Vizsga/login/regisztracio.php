<?php
      if(filter_input(INPUT_POST, "regisztraciosAdatok", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
        $pass1 = filter_input(INPUT_POST, "InputPassword");
        $pass2 = filter_input(INPUT_POST, "InputPassword2");
        $emailcim = filter_input(INPUT_POST, "emailcim");        
        $gender = filter_input(INPUT_POST, "gender");
        $jegyt = filter_input(INPUT_POST, "jegyt");
        $date = filter_input(INPUT_POST, "date");
        $mennyiseg = filter_input(INPUT_POST, "mennyiseg");
        $igazolvanyszam = filter_input(INPUT_POST, "igazolvanyszam");
        $name = htmlspecialchars(filter_input(INPUT_POST, "username"));
        var_dump($pass1, $pass2, $emailcim, $igazolvanyszam, $gender, $jegyt, $date, $mennyiseg, $name);
        if($pass1 != $pass2){
            echo '<p>Nem egyezik meg a jelszó</p>';
        }else{
            //-- regisztráció inditása
            $db -> register($name, $pass1, $emailcim, $igazolvanyszam, $gender, $jegyt, $date, $mennyiseg);
            header("Location: index.php"); // Átvált a nyitólapra.
        }
    }
?>
<div class="container">
  <form action="regisztracio.php" method="post">
    <div class="mb-3">
      <label for="username" class="form-label" style="color:white;">Felhasználói név: </label>
      <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Név" autocomplete="username" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label" style="color:white;">Emailcim: </label>
      <input type="email" class="form-control" id="email" name="email" placeholder="email" autocomplete="email" required>
    </div>
    <div class="mb-3">
      <label for="igazolvanyszam" class="form-label" style="color:white;">Igazolvanyszam: </label>
      <input type="text" class="form-control" id="igazolvanyszam" name="igazolvanyszam" placeholder="123456AB" pattern="[1-9]{1}[0-9]{5}[A-Za-z]{2}" required>
    </div>
    <br>
    <div class="row">
      <div class="mb-3 col-6">
        <label for="InputPassword" class="form-label" style="color:white;">Jelszó: </label>
        <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="8-20 characteres hosszú jelszó." autocomplete="address-line1" required>
      </div>
      <div class="mb-3 col-6">
        <label for="InputPassword2" class="form-label" style="color:white;">Jelszó: </label>
        <input type="password" class="form-control" id="InputPassword2" name="InputPassword2" placeholder="8-20 characteres hosszú jelszó." autocomplete="address-line2" required>          
      </div>
    </div>  
    <div class="kozepre">
      <h4>Mérközésekre a Jegyvásárlás</h4>
      <input type="checkbox" id="vehicle1" name="gender" value="Kecskemeti TE és Mezökövesd az ára 2000ft">
      <label for="gender" name="gender"> Kecskemeti TE és Mezökövesd az ára 2000ft</label><br><br>
      <input type="checkbox" id="vehicle2" name="gender" value="Puskás Akadémia és Paks az ára 2300ft" autocomplete="on">
      <label for="gender" name="gender"> Puskás Akadémia és Paks az ára 2300ft</label><br><br>
      <input type="checkbox" id="vehicle3" name="gender" value="Diósgyőri VTK és Debreceni VSC az ára 2500ft" autocomplete="on">
      <label for="gender" name="gender"> Diósgyőri VTK és Debreceni VSC az ára 2500ft</label><br><br>
      <input type="checkbox" id="vehicle4" name="gender" value="Újpest és MTK Budapest az ára 2100ft" autocomplete="on">
      <label for="gender" name="gender"> Újpest és MTK Budapest az ára 2100ft</label><br><br>
      <input type="checkbox" id="vehicle5" name="gender" value="Fehérvár FC és Zalaegerszeg az ára 1900ft" autocomplete="on">
      <label for="gender" name="gender"> Fehérvár FC és Zalaegerszeg az ára 1900ft</label><br><br>
      <input type="checkbox" id="vehicle6" name="gender" value="Ferencvárosi TC és Kisvárda az ára 2100ft" autocomplete="on">
      <label for="gender" name="gender"> Ferencvárosi TC és Kisvárda az ára 2100ft</label><br><br>
    </div>
    <div>
      <input type="checkbox" name="programing">
      <label for="FORM_ELEMENT" name="gender">Te egy robot vagy?</label>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</form>
<hr>
<main>
    <h2>Sponzorok</h2>
    <div class="sponzorok">
        <img src="data:image/png;base64,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" alt="Sponzor 1">
        <img src="data:image/png;base64,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" alt="Sponzor 2">
        <img src="https://www.ramasoft.hu/sites/default/files/otpbankuj.jpg" alt="Sponzor 3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ10-vczcq-X0uTIXAssLdQwhn5lF6lS9txtA&usqp=CAU" alt="Sponzor 3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkmtpa6n-uqJ8fh6K6asMbj09pJIVRW4_WbHi2gt1Uw_aDpYcMS28iwqVctukueMRQMc8&usqp=CAU" alt="Sponzor 3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS7-bFaDw03ySD6_qkuc09iEUdb01XDAXHqQ&usqp=CAU" alt="Sponzor 3">
        <img src="https://feelinglucky.hu/wp-content/uploads/unibet-logo.png" alt="Sponzor 3">
        <img src="https://m.blog.hu/fa/fantasztikus-cocacola/image/c64369b90692ae8d89c926710aafe87a.jpg" alt="Sponzor 3">
    </div>
</main>
<hr>
<footer>
    &COPY; Tasnádi Richárd és Szabó Marcell 2023.
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>