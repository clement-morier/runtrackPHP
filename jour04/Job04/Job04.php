<?php
// Durée de vie du cookie en secondes (1 jour)
$cookie_lifetime = 24 * 60 * 60;

// Gestion de la connexion
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie('prenom', $prenom, time() + $cookie_lifetime);
    header("Location: " . $_SERVER['PHP_SELF']); // Rediriger pour éviter la re-soumission du formulaire
    exit();
}

// Gestion de la déconnexion
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprimer le cookie en le rétrodatant
    header("Location: " . $_SERVER['PHP_SELF']); // Rediriger pour éviter la re-soumission du formulaire
    exit();
}

// Vérifier si le cookie existe
$is_logged_in = isset($_COOKIE['prenom']);
$prenom = $is_logged_in ? htmlspecialchars($_COOKIE['prenom']) : '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <?php if ($is_logged_in): ?>
        <h1>Bonjour <?php echo $prenom; ?> !</h1>
        <form method="post" action="">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <h1>Connexion</h1>
        <form method="post" action="">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>