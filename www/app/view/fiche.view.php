<main id="main">
            <div class="flowers">
        <div class="flower"><img src="public/images/fleurs/Fleurs 01.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 02.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 03.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 04.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 07.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 06.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 07.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 01.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 05.png" alt="" aria-hidden="true"></div>
        <div class="flower"><img src="public/images/fleurs/Fleurs 06.png" alt="" aria-hidden="true"></div>
    </div>
  <div class="biere-carte">
    <figure class="biere-image">   
      <?php
                        if (empty($produit['image'])) {
                          $photo = 'defaut.png';
                        } else {
                          $photo = 'public/images/biere/' . $produit['image'];
                        }
                        ?>
        <img src="<?= $photo?>" alt="photo de <?= $produit['nom'] ?>" /></a>
    </figure>
    <div class="biere-description">
        <h2 class="imperial"><?= $produit['nom'] ?></h2>
        <?php if (!empty($produit['info'])): ?>
          <p class="info-produit"><?= $produit['info'] ?></p>
        <?php endif; ?>
        <p class="prix">Prix : <span class="prix-valeur"><?= $produit['prix'] ?> €</span></p>
        <button class="ajouter-panier" onclick="this.classList.remove('animate'); void this.offsetWidth; this.classList.add('animate'); location.href='index.php?route=panier'">Ajouter au panier</button>
    </div>
  </div>
</main>