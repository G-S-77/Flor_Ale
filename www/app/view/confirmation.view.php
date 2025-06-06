<div id="age-check">
    <span class="question">Avez-vous 18 ans ou plus ?</span>
    <div class="age">
      <button type="submit" name="verification" class="btn-age" onclick="location.href='index.php?route=valconfirmation'">Oui</button>
      <button type="submit" name="verification" class="btn-age" onclick="openPopup()" class="btn-age openPopup pop">Non</button>
    </div>
    <img src="public/images/logo/logofleur_crop.png" alt="Logo Flor’Ale" class="logo-confirm" />
    <span class="note">
      Vous ne pouvez pas accéder au site si vous n’avez pas l’âge légal pour boire de l’alcool.
</span>
  </div>

    <div class="overlay-popup">
        <div class="content-popup">
            <h2>Tu n'as pas l'âge légal pour accéder au site.</h2>
            <p>Continue à cueillir des fleurs et reviens quand tu auras 18 ans.</p>
            <button onclick="closePopup()" class="pop">D'accord</button>
        </div>
    </div>