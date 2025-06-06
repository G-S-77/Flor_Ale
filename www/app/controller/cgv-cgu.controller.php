<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page cgv
 *
 * @return void
 */
function generateCGVPage() {
    $data = [
        'page_title' => "Conditions Générales de Vente",
        'view' => 'app/view/cgv.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}

/**
 * controller en charge de la génération de la page cgu
 *
 * @return void
 */
function generateCGUPage() {
    $data = [
        'page_title' => "Conditions Générales d'Utilisation",
        'view' => 'app/view/cgu.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}