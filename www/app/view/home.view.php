    <main>
      <section class="banner">
        <img src="public/images/school.jpg" alt="salle de classe vide" />
        <div class="info">
          <h3>Nouvelles formations pour les enseignants</h3>
          <a href="#" class="btn">En savoir plus</a>
        </div>
      </section>

      <section class="news">
        <h2>Actualités</h2>
        <div class="news-cards">
        <?php for ($i = 1; $i <=3 ; $i++): ?>
        <div class="news-card">
          <a href="#">
            <img src="public/images/vegetables.jpg" alt="panier de légumes" />
            <h3>Commander vos paniers légumes</h3>
          </a>
        </div>
        <?php endfor ?>
          <img class="news-decoration" src="public/images/dots.svg" alt="decoration" aria-hidden="true">
        </div>
      </section>
    </main>