<?php

require "../vendor/autoload.php";

use App\Controllers\MonologController;
// use App\Controllers\SystemController;

// $homePage = SystemController::homePage();
// echo $homePage;

// $name = " Danilo de Andrade  ";

// var_dump(trimData($name));

// var_dump(AuthMiddleware::auth());

$log = new MonologController;
$log->createLog('Danilo', 'home.log', 'Este é um log da página index');

