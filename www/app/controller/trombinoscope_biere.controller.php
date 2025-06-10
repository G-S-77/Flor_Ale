<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombinoscope_biere.model.php';

/**
 * controller en charge de la génération du trombinoscope des bières
 * 
 *Afficher la page du trombinoscope liste complète des bières.,
 * @return void
 */
function generateTrombiBeerPage() {
    $data = [
        'produits' => getAllBeer(),
        'page_title' => "Nos bières",
        'view' => 'app/view/trombinoscope_biere.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
// Afficher une fiche produit détaillée pour une bière spécifique (via son ID).
function generateFichePage() {
    $data = [
        'produit' => getBeerById($_GET['id']),
        'page_title' => "Fiche produit",
        'view' => 'app/view/fiche.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
