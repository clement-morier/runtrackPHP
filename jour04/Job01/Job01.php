<?php
session_start();

// Initialiser ou incrémenter le compteur de visites
if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}
$_SESSION['nbVisites']++;

// Réinitialiser le compteur si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
}

$nbVisites = $_SESSION['nbVisites'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de Visites</title>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <p>Nombre de visites : <?php echo $nbVisites; ?></p>

    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>