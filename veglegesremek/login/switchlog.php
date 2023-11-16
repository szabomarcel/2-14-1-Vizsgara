<?php
if ($login_register==="register") {
    require_once './login/registration.php';
} else {
    require_once './login/login.php';
}