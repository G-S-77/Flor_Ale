<main id="main">
    <div id="contact-page">
    <section class="container-contact">
        <header>Commande</header>
        <form class="form" action="index.php?route=commande" method="post">
            <div class="box-contact">
                <label>Nom</label>
                <input type="text" placeholder="Entrez votre nom" required />
            </div>
            <div class="box-contact">
                <label>Prénom</label>
                <input type="text" placeholder="Entrez votre prénom" required />
            </div>
            <div class="box-contact">
                <label>Adresse</label>
                <input type="text" placeholder="Entrez votre adresse" required />
            </div>
            <div class="box-contact">
                <label>Code postale</label>
                <input type="number" length="5" placeholder="Entrez votre code postale" required />
            </div>
            <div class="box-contact">
                <label>Numéro de carte</label>
                <input type="number" placeholder="Entrez votre numéro de carte" required />
            </div>
            <div class="date">
            <div class="box-contact">
                <label>Date d'expiration</label>
                <input type="number" min="1" max="12" placeholder="MM" required/>
                <input type="year" min="1967" max="2100" placeholder="AAAA" required/>
                <label>Numéro CVV</label>
                <input type="number" placeholder="123" />
            </div>
            <button type="submit">Acheter</button>
        </form>
    </section>
    <button class="achat" onclick="location.href='index.php?route=panier'">Continuer mes achats</button>
    </div>
    </main>