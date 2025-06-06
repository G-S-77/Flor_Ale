<?php 

/**
 * Fonction permettant de générer une page web à partir
 * des données contenues dans le tableau data.
 * Le tableau data doit à minima contenir les champs
 * 'view' et layout'.
 *
 * @param array $data: les données utilisées pour construire la vue
 * @return void
 */
function generatePage(array $data) {
    extract($data);

    $flash = getFlashMessage();

    ob_start();
    require_once $view;
    $content = ob_get_clean();

    require_once $layout;
}

/**
*Renvoie le message flash s'il existe
*
*@return string/null
*/

function getFlashMessage(): ?string {
    if (isset($_SESSION['flash'])){
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

/**
 * Indique si l'utilisateur a le droit d'accéder au site
 * 
 * @return boolean
 */

function isUserYes(): bool {
    return isset($_SESSION['has_access']);
}

/**
 * Vérifie si un utilisateur a le droit d'accéder au site, si ce n'est pas le cas, l'utilisateur est redirigé vers la page de login.
 * 
 * @return void
 */

function checkIsYes()
{
    if (!isUserYes()){
        $_SESSION['flash'] = "Vous n'avez pas l'âge légal pour accéder au site.";
        header('Location: index.php');
        exit;
    }
}