<?php
function occurrences($str, $char) {
    return substr_count($str, $char);
}
$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);
?>