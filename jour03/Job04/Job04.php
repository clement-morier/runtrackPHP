<?php
// Définir les produits
$products = [
    ["name" => "Eau", "prix" => 120, "quantity" => 2],
    ["name" => "Lait", "prix" => 80, "quantity" => 5],
    ["name" => "RedBull", "prix" => 150, "quantity" => 1],
    ["name" => "Box Wifi", "prix" => 60, "quantity" => 10],
];

// Fonction pour appliquer la réduction
function applyDiscount(&$product) {
    if ($product['prix'] > 100) {
        $product['prix'] *= 0.9; // Appliquer une réduction de 10 %
    }
}

// Fonction pour générer le tableau HTML des produits
function generateProductTable($products) {
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($product['name']) . "</td>";
        echo "<td>" . number_format($product['prix'], 2) . " €</td>";
        echo "<td>" . htmlspecialchars($product['quantity']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Appliquer les réductions aux produits
foreach ($products as &$product) {
    applyDiscount($product);
}

// Afficher la page HTML avec le tableau des produits
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <?php generateProductTable($products); ?>
</body>
</html>