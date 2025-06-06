<?php

require_once 'app/controller/controller.php';
require_once 'app/model/panier.model.php';
require_once 'app/model/model.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generatePanierPage() {
    $data = [
        'paniers' => getBieres(),
        'css' => "panier.css",
        'page_title' => "Votre panier",
        'view' => 'app/view/panier.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}