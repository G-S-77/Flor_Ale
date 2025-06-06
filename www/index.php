<?php

session_start();

require_once 'config.php';
require_once 'app/controller/confirmation.controller.php';
require_once 'app/model/model.php';

// Routeur doit récupérer le nom de la demande

$route = 'confirmation';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
switch ($route) {
    case 'confirmation':
        require_once 'app/controller/confirmation.controller.php';
        generateVerifPage();
        break;
        case 'valconfirmation':
        require_once 'app/controller/confirmation.controller.php';
        validateAge();
        break;
        break;
    case 'home':
        require_once 'app/controller/home.controller.php';
        generateHomePage();
        break;
    case 'bieres':
        require_once 'app/controller/trombinoscope_biere.controller.php';
        generateTrombiBeerPage();
        break;
    case 'produits':
        require_once 'app/controller/trombi_biere.controller.php';
        generateTrombiBierePage();
        break;
    case 'produit':
        require_once 'app/controller/trombinoscope_biere.controller.php';
        generateFichePage();
        break;
    case 'equipe':
        require_once 'app/controller/trombinoscope_team.controller.php';
        generateTrombiTeamMMIPage();
        break;
    case 'fabrication':
        require_once 'app/controller/fabrication.controller.php';
        generateFabricationPage();
        break;
    case 'contact':
        require_once 'app/controller/contact.controller.php';
        generateContactPage();
    case 'commande':
        require_once 'app/controller/commande.controller.php';
        generateCommandePage();
        break;
    case 'panier':
        require_once 'app/controller/panier.controller.php';
        generatePanierPage();
        break;
    case 'cgu':
        require_once 'app/controller/cgv-cgu.controller.php';
        generateCGUPage();
        break;
    case 'cgv':
        require_once 'app/controller/cgv-cgu.controller.php';
        generateCGVPage();
        break;
    default:
        exit;
}
