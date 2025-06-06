<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page de fabrication
 *
 * @return void
 */
function generateFabricationPage() {
    $data = [
        'page_title' => "La fabrication de notre bière",
        'view' => 'app/view/fabrication.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}