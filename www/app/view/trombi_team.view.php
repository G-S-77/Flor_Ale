
<main id="main"> 

    <!-- Conteneur pour afficher plusieurs fleurs -->
    <div class="flowers"> 
        
        <div class="flower"><img src="public/images/fleurs/Fleurs 01.png" alt=""></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 02.png" alt=""></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 03.png" alt=""></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 04.png" alt=""></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 05.png" alt=""></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 06.png" alt=""></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 07.png" alt=""></div>
        
        <div class="flower"><img src="public/images/fleurs/Fleurs 01.png" alt=""></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 03.png" alt=""></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 05.png" alt=""></div>
    </div>

    
    <div id="trombi"> 

        
        <div class="container1"> 
            
            <h2>Qui sommes-nous ?</h2>
            
            <p>Nous sommes une équipe d’étudiants en MMI (...) entre amis.</p>
            
            <span class="imperial">Groupe MMI</span>
        </div>

        
        <div class="container2">
            <!-- Grille  cartes des membres -->
            <div class="grid-team">
                <!--  qui parcourt chaque membre du groupe MMI -->
                <?php foreach ($membresMMI as $membreMMI): ?>
                    
                    <div class="card">
                        
                        <h3><?= $membreMMI['prenom'] ?>&nbsp;<?= $membreMMI['nom'] ?></h3>
                        <figure>
                            <?php
                            // Si  photo  vide,-> image par défaut, sinon on prend la vraie photo
                            $photo = empty($membreMMI['photo_url']) ? 'defaut.png' : 'public/images/equipe/' . $membreMMI['photo_url'];
                            ?>
                            
                            <img src="<?= $photo ?>" alt="photo de <?= $membreMMI['prenom'] ?> <?= $membreMMI['nom'] ?>" />
                        </figure>
                        
                        <span class="poste"><?= $membreMMI['poste'] ?></span>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        

    </div>
</main>
