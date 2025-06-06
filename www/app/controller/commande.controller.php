<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page commande
 *
 * @return void
 */
function generateCommandePage() {
    $data = [
        'page_title' => "Commander",
        'view' => 'app/view/commande.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}