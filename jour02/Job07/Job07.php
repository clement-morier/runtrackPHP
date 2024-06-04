<?php
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = intval($_GET['largeur']);
    $hauteur = intval($_GET['hauteur']);

    if ($largeur > 0 && $hauteur > 0 && $largeur % 2 == 0) {
        echo "<pre>";
        for ($i = 0; $i < $largeur / 2; $i++) {
            echo str_repeat(' ', ($largeur / 2) - $i - 1);
            echo '/';
            echo str_repeat('_', $i * 2);
            echo '\\';
            echo "\n";
        }
        for ($i = 0; $i < $hauteur; $i++) {
            if ($i == $hauteur - 1) {
                echo '|';
                echo str_repeat('_', $largeur - 2);
                echo '|';
            } else {
                echo '|';
                echo str_repeat(' ', $largeur - 2);
                echo '|';
            }
            echo "\n";
        }

        echo "</pre>";
    } else {
        echo "Veuillez entrer des valeurs positives pour la largeur et la hauteur, et assurez-vous que la largeur est un nombre pair.";
    }
} else {
    echo "Aucune donnée reçue.";
}
?>