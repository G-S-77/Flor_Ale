<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombinoscope_biere.model.php';

/**
 * controller en charge de la génération du trombinoscope des bières
 *
 * @return void
 */
function generateTrombiBierePage() {
    $data = [
        'css' => 'trombi_biere.css',
        'produits' => getAllBeer(),
        'page_title' => "Nos bières",
        'view' => 'app/view/trombi_biere.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}