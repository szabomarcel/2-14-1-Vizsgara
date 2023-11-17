<?php
  /*if(isset($_POST[INPUT_POST. "'belepesiAdatok'". FILTER_VALIDATE_BOOLEAN . FILTER_NULL_ON_FAILURE]))*/
  if (filter_input(INPUT_POST,'belepesiAdatok', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
  //-- A kapott adatok feldolgozása    
  //$email = htmlspecialchars(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));
  $name = htmlspecialchars(filter_input(INPUT_POST, 'name'));
  $pass1 = htmlspecialchars(filter_input(INPUT_POST, 'password'));
  //$db->login($name);
  if ($db->login($name, $pass1)) {
    $_SESSION['login'] !== false;
    //$_SESSION['name'] = '';
    //$_SESSION['password'] = '';
  }
}
?>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email bemenet -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3" id="email" name="email" placeholder="email" autocomplete="email" required>Email cím megadás: </label>
          </div>

          <!-- Felhasználói név bemenet -->
          <div class="form-outline mb-4">
            <input type="name" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid name address" />
            <label class="form-label" for="form3Example3" id="name" name="name" aria-describedby="nameHelp" placeholder="Név" autocomplete="name" required>Feljazsnálói név: </label>
          </div>

          <!-- Jelszó bemenet -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4" id="password" name="password" placeholder="8-20 characteres hosszú jelszó." autocomplete="address-line1" required>Jelszó: </label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="index.php?menu=register" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="belepesiAdatok" value="true">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="index.php?menu=register"
                class="link-danger">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>