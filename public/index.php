<?php

require "../vendor/autoload.php";

// use App\Controllers\SystemController;

// $homePage = SystemController::homePage();
// echo $homePage;

// $name = " Danilo de Andrade  ";

// var_dump(trimData($name));

var_dump(AuthMiddleware::auth());
