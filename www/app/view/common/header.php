<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/style.css" />
    <title><?= $page_title ?></title>
  </head>
  <body>
    <header>
      <logo> Tech'Etud </logo>
      <div class="login" aria-label="You're logged">
        <img src="public/images/utilisateur.svg" alt="logged icon" />
      </div>
      <nav>
        <ul>
          <li class="current"><a href="index.php">Accueil</a></li>
          <li><a href="index.php?route=trombi">Trombinoscope</a></li>
          <li><a href="#">Cours</a></li>
        </ul>
      </nav>
    </header>
  