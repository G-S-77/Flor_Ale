<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page de confirmation
 *
 * @return void
 */
function generateVerifPage() {
    $data = [
        'css' => "confirmation.css",
        'page_title' => "Flor’Ale - Vérification d'âge",
        'view' => 'app/view/confirmation.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}

function validateAge() {
    $_SESSION['has_access'] = true;
    header('Location: index.php?route=home');
    exit;
}