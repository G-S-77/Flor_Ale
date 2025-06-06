<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombinoscope_team.model.php';

/**
 * contrôleur en charge de la génération de la page du trombinoscope de l'équipe
 *
 * @return void
 */
    function generateTrombiTeamMMIPage() {
            $data = [
                'membresMMI' => getAllTeamMMI(),
                'membresGB' => getAllTeamGB(),
                'page_title' => "Notre équipe",
                'view' => 'app/view/trombinoscope_team.view.php',
                'layout' => 'app/view/common/layout.php',
            ];
    
        generatePage($data);
}