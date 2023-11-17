<?php
if ($menuItem==="register") {
    require_once './login/registration.php';
} else {
    require_once './login/login.php';
}