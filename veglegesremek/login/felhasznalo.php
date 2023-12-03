<?php
/*if (filter_input(INPUT_POST, "Adatmodositas", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
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
        header("Location: index.php?menuItem=fooldal");
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
    $email = filter_input(INPUT_POST, "email");
    $jegyt = filter_input(INPUT_POST, "jegyt");
    $pass1 = filter_input(INPUT_POST, "password");
    $gender = filter_input(INPUT_POST, "gender");
    $date = filter_input(INPUT_POST, "date");
    if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $igazolvany, $pass1, $gender, $date)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menuItem=fooldal");
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} else {
    $adatok = $db->getKivalasztottkerekpar($id, $name, $email, $jegyt, $igazolvany, $pass1, $gender, $date);
}*/
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$name = htmlspecialchars(filter_input(INPUT_POST, "name"));
$email = filter_input(INPUT_POST, "email");
$jegyt = filter_input(INPUT_POST, "jegyt");
$pass1 = filter_input(INPUT_POST, "password");
$gender = filter_input(INPUT_POST, "gender");
$date = filter_input(INPUT_POST, "date");

if (filter_input(INPUT_POST, "Adatmodositas", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $db->getKivalasztotttorlottfocista($id);
    var_dump($adatok);

    if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $pass1, $gender, $date)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menuItem=fooldal");
        exit;
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} elseif (filter_input(INPUT_POST, "Egyszarvu", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $db->getKivalasztottkerekpar($id);
    var_dump($adatok);

    if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $pass1, $gender, $date)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menuItem=fooldal");
        exit;
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} else {
    // Ebben az ágban marad az eredeti $adatok értéke, ha nincs POST kérés
}
?>
<section class="text-center text-lg-start">
<!-- Jumbotron -->
<div class="container py-4">
    <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
            <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-5">Felhasználó számára módositható adatok</h2>
                    <form method="post" action="index.php?menuItem=fooldal&id=<?php echo $adatok['id']; ?>" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label for="neve" class="form-label">Név módosítás:</label>
                                    <input type="text" class="form-control" name="neve" id="neve" value="<?php echo $adatok['name']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <label for="jegyt" class="form-label">Jegy módosítás:</label>
                                <div class="form-outline">
                                  <select id="jegyt" name="jegyt" required>
                                    <option value="egyedi" value="<?php echo $adatok['jegyt']; ?>" required>Egyedi jegy</option>
                                    <option value="csoportos" value="<?php echo $adatok['jegyt']; ?>" required>Csoportos jegy</option>
                                  </select>
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email módosítás:</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $adatok['email']; 
                            $adatok = $db->getKivalasztotttorlottfocista($id);
                            if ($adatok !== null) {
                              var_dump($adatok);
                                // További kód...   
                            } else {
                              echo 'Hiba: Nem sikerült lekérni az adatokat.';
                            }?>">
                        </div>

                        <!-- Date input -->
                        <div class="form-outline mb-4">
                            <label for="date" class="form-label">Dátum módosítás:</label>
                            <input type="date" class="form-control" name="date" id="date" value="<?php echo $adatok['date']; ?>">
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
<footer id="footer" class="footer">
    <div class="footer-content">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">About ZenBlog</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
            <p><a href="#" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="index.php?menuItem=fooldal"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Blog</a></li>
              <li><a href="atigazolas.php"><i class="bi bi-chevron-right"></i> Categories</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Single Post</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> About us</a></li>
              <li><a href="index.php?menuItem=felhasznalo"><i class="bi bi-chevron-right"></i> Contact</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="#"><i class="bi bi-chevron-right"></i> Business</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Culture</a></li>
              <li><a href="index.php?menuItem=atigazolas"><i class="bi bi-chevron-right"></i> Sport</a></li>
              <li><a href="https://www.tippmixpro.hu/"><i class="bi bi-chevron-right"></i> Tipmixek</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Politics</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Startups</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Travel</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h3 class="footer-heading">Sponzotok</h3>
            <ul class="footer-links footer-blog-entry list-unstyled">
              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="https://www.ramasoft.hu/sites/default/files/otpbankuj.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>5 Great Startup Tips for Female Founders</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ10-vczcq-X0uTIXAssLdQwhn5lF6lS9txtA&usqp=CAU" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkmtpa6n-uqJ8fh6K6asMbj09pJIVRW4_WbHi2gt1Uw_aDpYcMS28iwqVctukueMRQMc8&usqp=CAU" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS7-bFaDw03ySD6_qkuc09iEUdb01XDAXHqQ&usqp=CAU" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="https://feelinglucky.hu/wp-content/uploads/unibet-logo.png" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="https://m.blog.hu/fa/fantasztikus-cocacola/image/c64369b90692ae8d89c926710aafe87a.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-legal">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Szabó Marcell és Tasnádi Richárd</span></strong>. Készítetette
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="#">BootstrapMade</a>
            </div>
          </div>
          <div class="col-md-6">
          <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="github"><i class="bi bi-github"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>