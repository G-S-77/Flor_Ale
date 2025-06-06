<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page contact
 *
 * @return void
 */
function generateContactPage() {
    $data = [
        'page_title' => "Nous contacter",
        'view' => 'app/view/contact.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}