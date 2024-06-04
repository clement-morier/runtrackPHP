<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    if (is_numeric($nombre) && intval($nombre) == $nombre) {
        $nombre = intval($nombre);
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre entier valide.";
    }
} else {
    echo "Aucun nombre reçu.";
}
?>