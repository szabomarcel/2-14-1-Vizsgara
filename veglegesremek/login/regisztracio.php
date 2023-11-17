<?php
      if(filter_input(INPUT_POST, "regisztraciosAdatok", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)){
        $id = filter_input(INPUT_POST, "id");
        $pass1 = filter_input(INPUT_POST, "password");
        $pass2 = filter_input(INPUT_POST, "InputPassword2");
        $email = filter_input(INPUT_POST, "email");        
        $gender = filter_input(INPUT_POST, "gender");
        $jegyt = filter_input(INPUT_POST, "jegyt");
        $date = filter_input(INPUT_POST, "date");
        $mennyiseg = filter_input(INPUT_POST, "mennyiseg");
        $igazolvany = filter_input(INPUT_POST, "igazolvany");
        $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
        var_dump($pass1, $pass2, $email, $igazolvany, $gender, $jegyt, $date, $mennyiseg, $name);
        if($pass1 == $pass2){
          //-- regisztráció inditása
          $db -> register($id, $name, $email, $jegyt, $mennyiseg, $igazolvany, $pass1, $gender, $date);
          header("Location: index.php"); // Átvált a nyitólapra.
        }else{
          echo '<p>Nem egyezik meg a jelszó</p>';
        }
    }
?>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select">
                      <option value="1">State</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select class="select">
                      <option value="1">City</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example9" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example90" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Course</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="col-8 mt-4 mx-auto">
  <form action="#" method="post" class="row needs-validation" novalidate>
    <div class="mb-3">
      <label for="name" class="form-label" style="color:white;">Felhasználói név: </label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Név" autocomplete="name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label" style="color:white;">Emailcim: </label>
      <input type="email" class="form-control" id="email" name="email" placeholder="email" pattern="@[A-Za-z0-9]{2,}" autocomplete="email" required>
    </div>
    <div class="mb-3">
      <label for="igazolvany" class="form-label" style="color:white;">Igazolvanyszam: </label>
      <input type="text" class="form-control" id="igazolvany" name="igazolvany" placeholder="123456AB" pattern="[1-9]{1}[0-9]{5}[A-Za-z]{2}" required>
    </div>
    <br>
    <div class="row">
      <div class="mb-3 col-6">
        <label for="password" class="form-label" style="color:white;">Jelszó: </label>
        <input type="password" class="form-control" id="password" name="password" placeholder="8-20 characteres hosszú jelszó." autocomplete="address-line1" pattern="[a-zA-Z0-9]{8,}" required>
      </div>
      <div class="mb-3 col-6">
        <label for="InputPassword2" class="form-label" style="color:white;">Jelszó: </label>
        <input type="password" class="form-control" id="InputPassword2" name="InputPassword2" placeholder="8-20 characteres hosszú jelszó." autocomplete="address-line2" pattern="[a-zA-Z0-9]{8,}" required>          
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<hr>
<div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
  <!-- Copyright -->
  <div class="text-white mb-3 mb-md-0">
    Copyright © 2020. All rights reserved.
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>