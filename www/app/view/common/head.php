<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="public/css/style.css">
    <?php if (isset($css)): ?>
      <link rel="stylesheet" href="public/css/<?= $css ?>" />
      <?php endif ?>
    <link rel="shortcut icon" href="public/images/logo/logofleur.png" type="image/x-icon">
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script src="public/js/script.js" defer></script>
</head>
<body>
    <div class="cursor"><img src="public/images/curseur.png"></div>
    <div class="cursor-text"><img src="public/images/curseur_text.png"></div>