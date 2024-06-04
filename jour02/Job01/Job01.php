<?php
if (!empty($_GET)) {
    $nombreArguments = count($_GET);
    echo "Nombre d'arguments GET reçus : " . $nombreArguments;
} else {
    echo "Aucun argument GET reçu.";
}
?>