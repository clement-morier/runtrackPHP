<?php
if (!empty($_POST)) {
    $nombreArguments = count($_POST);
    echo "Nombre d'arguments POST reçus : " . $nombreArguments;
} else {
    echo "Aucun argument POST reçu.";
}
?>