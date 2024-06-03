<?php
function calcule($num1, $operation, $num2) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Division par zéro impossible";
            }
        case '%':
            return $num1 % $num2;
        default:
            return "Opération non valide";
    }
}
?>