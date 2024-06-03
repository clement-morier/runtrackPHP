<!DOCTYPE html>
<html>
<head>
    <title>Transformations de chaîne de caractères</title>
</head>
<body>

<h2>Formulaire de transformations de chaîne de caractères</h2>

<form method="post">
    <label for="str">Chaîne de caractères :</label><br>
    <input type="text" id="str" name="str" required><br><br>
    <label for="action">Choisir une action :</label><br>
    <select id="action" name="action">
        <option value="gras">Gras (mots commençant par une majuscule)</option>
        <option value="cesar">César (décalage des caractères)</option>
        <option value="plateforme">Plateforme (_ aux mots finissant par "me")</option>
    </select><br><br>
    <input type="submit" value="Valider">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["str"];
    $action = $_POST["action"];
    switch ($action) {
        case 'gras':
            echo "<p style='font-weight: bold;'>" . ucwords($str) . "</p>";
            break;
        case 'cesar':
            function cesar($str, $shift = 2) {
                $result = '';
                $length = strlen($str);
                for ($i = 0; $i < $length; $i++) {
                    $char = $str[$i];
                    if (ctype_alpha($char)) {
                        $ascii = ord($char);
                        $shiftedAscii = $ascii + $shift;
                        if (ctype_upper($char)) {
                            if ($shiftedAscii > ord('Z')) {
                                $shiftedAscii -= 26;
                            }
                        } else {
                            if ($shiftedAscii > ord('z')) {
                                $shiftedAscii -= 26;
                            }
                        }
                        $result .= chr($shiftedAscii);
                    } else {
                        $result .= $char;
                    }
                }
                return $result;
            }
            echo "<p>" . cesar($str) . "</p>";
            break;
        case 'plateforme':
            $words = explode(' ', $str);
            foreach ($words as $word) {
                if (substr($word, -2) == 'me') {
                    echo $word . '_ ';
                } else {
                    echo $word . ' ';
                }
            }
            break;
        default:
            echo "Action non valide";
    }
}
?>

</body>
</html>