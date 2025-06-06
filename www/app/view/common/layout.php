<?php 
/*
    Layout composé d'un header, d'une partie centrale (contenu) et d'un footer
*/

$currentRoute = $_GET['route'] ?? 'confirmation';

// Affichage du header
include 'app/view/common/head.php';
if ($currentRoute !== 'confirmation') {
    include 'app/view/common/header.php';
}

//Affichage de la vue
echo $content;

//Affichage du footer
if ($currentRoute !== 'confirmation') {
    include 'app/view/common/footer.php';
}
?>
</body>
</html>