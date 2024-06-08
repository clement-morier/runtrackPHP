<?php
// Durée de vie du cookie en secondes (1 an)
$cookie_lifetime = 365 * 24 * 60 * 60;

// Initialiser ou incrémenter le compteur de visites
if (isset($_COOKIE['nbVisites'])) {
    $nbVisites = $_COOKIE['nbVisites'] + 1;
} else {
    $nbVisites = 1;
}
setcookie('nbVisites', $nbVisites, time() + $cookie_lifetime);

// Réinitialiser le compteur si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $nbVisites = 0;
    setcookie('nbVisites', $nbVisites, time() + $cookie_lifetime);
    header("Location: " . $_SERVER['PHP_SELF']); // Rediriger pour éviter la re-soumission du formulaire
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de Visites avec Cookie</title>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <p>Nombre de visites : <?php echo $nbVisites; ?></p>

    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>