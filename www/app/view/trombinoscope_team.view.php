    <main id="main">
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
                <p>Nous sommes une équipe d’étudiants en MMI (Métiers du Multimédia et de l’Internet), en collaboration
                    avec des étudiants en GB (Génie Biologique). Tandis qu’ils ont mis tout leur savoir-faire dans la
                    fabrication de la bière, nous avons travaillé à lui créer une identité forte et singulière. C’est
                    ainsi qu’est née Flor’Ale : une bière aux arômes de myrtille, mûre et cassis, qui évoque le
                    printemps et se partage idéalement entre amis.</p>
                <span class="imperial">Groupe MMI</span>
            </div>
            <div class="container2">
                <div class="sliderMMI">
        <?php
        $i = 0;
        foreach ($membresMMI as $membreMMI): ?>
                    <div class="cardMMI <?= $i === 0 ? 'active' : '' ?>">
                      <h3><?= $membreMMI['prenom'] ?>&nbsp;<?= $membreMMI['nom'] ?></h3>
                      <figure>
                        <?php
                        if (empty($membreMMI['photo_url'])) {
                          $photo = 'defaut.png';
                        } else {
                          $photo = 'public/images/equipe/' . $membreMMI['photo_url'];
                        }
                        ?>
                        <img src="<?= $photo?>" alt="photo de <?= $membreMMI['prenom'] ?> <?= $membreMMI['nom'] ?>" />
                      </figure>
                      <span class="poste"><?= $membreMMI['poste'] ?></span>
                    </div>
        <?php $i++; endforeach ?>
                </div>
                       <button id="leftMMI" class="btn-nav"><</button>
                        <button id="rightMMI" class="btn-nav">></button>
        </div>

        <span class="imperial">Groupe GB</span>
        <div class="container2">
                <div class="sliderGB">
        <?php
        $i = 0;
        foreach ($membresGB as $membreGB): ?>
                    <div class="cardGB <?= $i === 0 ? 'active' : '' ?>">
                      <h3><?= $membreGB['prenom'] ?>&nbsp;<?= $membreGB['nom'] ?></h3>
                      <figure>
                        <?php
                        if (empty($membreGB['photo_url'])) {
                          $photo = 'defaut.png';
                        } else {
                          $photo = 'public/images/equipe/' . $membreGB['photo_url'];
                        }
                        ?>
                        <img src="<?= $photo?>" alt="photo de <?= $membreGB['prenom'] ?> <?= $membreGB['nom'] ?>" />
                      </figure>
                    </div>
        <?php $i++; endforeach ?>
                </div>
                       <button id="leftGB" class="btn-nav"><</button>
                        <button id="rightGB" class="btn-nav">></button>
        </div>
        </div>
    </main>