<?php
if (!empty($_POST)) {
    echo "<table border='1'>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>";
    foreach ($_POST as $key => $value) {
        echo "<tr>
                <td>" . htmlspecialchars($key) . "</td>
                <td>" . htmlspecialchars($value) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Aucun argument POST reçu.";
}
?>