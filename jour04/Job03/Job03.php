<?php
session_start();

// Ajouter un prénom à la variable de session
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}

// Réinitialiser la liste des prénoms si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    unset($_SESSION['prenoms']);
}

$prenoms = isset($_SESSION['prenoms']) ? $_SESSION['prenoms'] : [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Prénoms</title>
</head>
<body>
    <h1>Liste des Prénoms</h1>

    <form method="post" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>

    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <h2>Prénoms enregistrés :</h2>
    <ul>
        <?php foreach ($prenoms as $prenom): ?>
            <li><?php echo $prenom; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>