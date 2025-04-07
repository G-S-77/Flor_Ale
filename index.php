<?php
require_once 'config.php';
require_once 'app/controller/home.controller.php';
require_once 'app/model/model.php';

// Routeur doit récupérer le nom de la demande

$route = 'home';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
switch ($route) {
    case 'home':
        require_once 'app/controller/home.controller.php';
        generateHomePage();
        break;
    case 'trombi':
        require_once 'app/controller/trombi.controller.php';
        generateTrombiPage();
        break;
    case 'student':
        require_once 'app/controller/trombi.controller.php';
        generateFichePage();
        break;
    default:
        exit;
}
