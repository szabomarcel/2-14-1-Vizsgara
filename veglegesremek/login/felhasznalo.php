<?php
if (filter_input(INPUT_POST, "Adatmodositas", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $_POST;
    var_dump($adatok);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $email = filter_input(INPUT_POST, "email");
    $jegyt = filter_input(INPUT_POST, "jegyt");
    $pass1 = filter_input(INPUT_POST, "password");
    $gender = filter_input(INPUT_POST, "gender");
    $date = filter_input(INPUT_POST, "date");
    if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $igazolvany, $pass1, $gender, $date)){
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menu=home");
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
}else{
    //$adatok = $db->getKivalasztotttorlottfocista($id);
}
//$adatok = $db->getKivalasztotttorlottfocista($id);
if (filter_input(INPUT_POST, "Egyszarvu", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $_POST;
    var_dump($adatok);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $email = filter_input(INPUT_POST, "email");
    $jegyt = filter_input(INPUT_POST, "jegyt");
    $pass1 = filter_input(INPUT_POST, "password");
    $gender = filter_input(INPUT_POST, "gender");
    $date = filter_input(INPUT_POST, "date");
    if ($db->setKivalasztotttorlottkerekpar($bicikli_id)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menu=home");
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} else {
    //$adatok = $db->getKivalasztottkerekpar($id, $name, $email, $jegyt, $igazolvany, $pass1, $gender, $date);
}
?>
<section class="text-center text-lg-start">
<!-- Jumbotron -->
<div class="container py-4">
    <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
            <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-5">Felhasználó száméra módositható adatok</h2>
                    <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label for="neve" class="form-label">Név</label>
                                    <input type="text" class="form-control" name="neve" id="neve" value="<?php echo $adatok['neve']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label for="jegyt" class="form-label">Jegy</label>
                                    <input type="text" class="form-control" name="jegyt" id="jegyt" value="<?php echo $adatok['jegyt']; ?>">
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $adatok['email']; ?>">
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label for="jegyt" class="form-label">jegyt</label>
                            <input type="text" class="form-control" name="jegyt" id="jegyt" value="<?php echo $adatok['jegyt']; ?>">
                        </div>

                        <!-- Submit button -->                        
                        <button type="submit" class="btn btn-info btn-block mb-4" value="1" name="Adatmodositas">Módosítás</button>
                        <a href="index.php?menuItem=felhasznalo&id=<?php echo $adatok['id'];?>" class="btn btn-dark btn-block mb-4">Megvásárlom</a>
                        <button type="submit" class="btn btn-info btn-block mb-4" value="1" name="Egyszarvu">Törlés</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="kepek/csapatok/Fehervar.png" class="w-100 rounded-4 shadow-4" alt="kepek" />
        </div>
    </div>
</div>
</section>
<div class="container d-lg-flex py-4">
  <div class="me-lg-auto text-center text-lg-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Flexor</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</div>