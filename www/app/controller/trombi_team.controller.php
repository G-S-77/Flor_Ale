
    <?php
    
    //  contrôleur principal 
    require_once 'app/controller/controller.php';
    
    //  membre equipe
    require_once 'app/model/trombi_team.model.php';
    
    /**
     * Fonction qui permet de générer la page du trombinoscope de l'équipe
     *
     * @return void
     */
    function generateTrombiTeamMMIPage() {
        
    
        $data = [
            
            'membresMMI' => getAllTeamMMI(),
    

     
           
            'page_title' => "Notre équipe",
    
            
            'view' => 'app/view/trombinoscope_team.view.php',
    
           
            'layout' => 'app/view/common/layout.php',
        ];
    
        //  donnée
        generatePage($data);
    }
