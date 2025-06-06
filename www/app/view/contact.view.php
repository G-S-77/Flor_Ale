<main id="main">
    <div id="contact-page">
    <section class="container-contact">
        <header>Formulaire de contact</header>
        <form class="form" action="index.php?route=home" method="post">
            <div class="box-contact">
                <label>Nom</label>
                <input type="text" placeholder="Entrez votre nom" required />
            </div>
            <div class="box-contact">
                <label>Prénom</label>
                <input type="text" placeholder="Entrez votre prénom" required />
            </div>
            <div class="box-contact">
                <label>Adresse email</label>
                <input type="email" placeholder="Entrez votre adresse email" required />
            </div>
            <div class="box-contact">
                <label>Âge <span> (facultatif)</span></label>
                <input type="number" min="18" max="120" placeholder="Entrez votre âge" />
            </div>
            <div class="message">
                <label>Votre message</label>
                <textarea class="message" placeholder="Entrez votre message" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </section>
    </div>
    </main>