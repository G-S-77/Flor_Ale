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
          <div class="container3">
        <h2>Nos bières</h2>
        <h3>Découvrez nos bières artisanales 🍻</h3>
        </div>
    <div class="sliderbiere">
        <div class="listbiere">
          <?php
        $i = 0;
        foreach ($produits as $produit): ?>
        <div class="item" data-id="<?= $produit['id'] ?>">
            <h4 class="name"><?= $produit['nom'] ?></h4>
              <figure>
                <?php
                        if (empty($produit['image'])) {
                          $photo = 'defaut.png';
                        } else {
                          $photo = 'public/images/biere/' . $produit['image'];
                        }
                        ?>
                        <img src="<?= $photo?>" alt="photo de <?= $produit['nom'] ?>" />
                </figure>
              <div class="card-infos">
                <span class="desc"><?= $produit['description'] ?></span>
              </div>
            </a>
            </div>
        <?php $i++; endforeach ?>
        </div>
      </div>
    </div>
    </main>