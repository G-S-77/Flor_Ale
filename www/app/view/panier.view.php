<main id="main">
    <div id="panier">
<div class="titre">
  <h2>Votre panier</h2>
</div>
<p>Nos bières</p>

<div class="bieres"> <!-- on ouvre la grille -->
  <?php foreach ($paniers as $panier): ?>
    <div class="produits">
      <figure>
                <?php
                        if (empty($panier['image'])) {
                          $photo = 'defaut.png';
                        } else {
                          $photo = 'public/images/biere/' . $panier['image'];
                        }
                        ?>
                        <img src="<?= $photo?>" alt="photo de <?= $panier['nom'] ?>" />
                </figure>
      <h3 class="nom"><?= $panier["nom"] ?> </h3>
      <p class="prix"><?= $panier["prix"] ?> €</p>
      <label>Quantité</label>
        <div class="nombre">
          <button class="decrement">−</button>
            <input type="number" id="quantite" name="quantite" min="0" max="100">
          <button class="increment">+</button>
        </div>
    </div>
  <?php endforeach; ?>
</div> <!-- on ferme la grille -->

<div class="bouton">
  <button onclick="location.href='index.php?route=commande'">Finaliser la commande</button>
</div>
</div>
</main>