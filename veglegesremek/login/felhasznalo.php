<?php
if (filter_input(INPUT_POST, "Adatmodositas", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $_POST;
    var_dump($adatok);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $tipus = filter_input(INPUT_POST, "tipusSelect");
    $gyartasiev = filter_input(INPUT_POST, "gyartasiev");
    $megjegyzes = filter_input(INPUT_POST, "megjegyzes");
    $nyilvantartasban = filter_input(INPUT_POST, "nyilvantartasban");
    $ar = filter_input(INPUT_POST, "ar");
    if ($db->setKivalasztotttorlottfocista($id))if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $igazolvany, $pass1, $gende, $date)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menu=home");
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
}else{
    $adatok = $db->getKivalasztotttorlottfocista($id);
}
$adatok = $db->getKivalasztotttorlottfocista($id);

if (filter_input(INPUT_POST, "Egyszarvu", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $_POST;
    var_dump($adatok);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $tipus = filter_input(INPUT_POST, "tipusSelect");
    $gyartasiev = filter_input(INPUT_POST, "gyartasiev");
    $megjegyzes = filter_input(INPUT_POST, "megjegyzes");
    $nyilvantartasban = filter_input(INPUT_POST, "nyilvantartasban");
    $ar = filter_input(INPUT_POST, "ar");
    if ($db->setKivalasztotttorlottfocista($id)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menu=home");
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} else {
    $adatok = $db->getKivalasztotttorlottfocista($id);
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
                            <label for="markaneve" class="form-label">Márka neve</label>
                            <input type="text" class="form-control" name="markaneve" id="markaneve" value="<?php echo $adatok['markaneve']; ?>">
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label for="markaneve" class="form-label">Márka neve</label>
                            <input type="text" class="form-control" name="markaneve" id="markaneve" value="<?php echo $adatok['markaneve']; ?>">
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                            <label class="form-check-label" for="form2Example33">Subscribe to our newsletter</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Módosítás</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="kepek/csapatok/Fehervar.png" class="w-100 rounded-4 shadow-4" alt="kepek" />
        </div>
    </div>
</div>
<!-- Jumbotron -->
</section>
<!-- Section: Design Block -->