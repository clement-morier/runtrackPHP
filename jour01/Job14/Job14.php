<?php
function leetSpeak($str) {
    $leetTable = array(
        'a' => '4', 'A' => '4',
        'e' => '3', 'E' => '3',
        'i' => '1', 'I' => '1',
        'o' => '0', 'O' => '0',
        's' => '5', 'S' => '5',
        't' => '7', 'T' => '7',
        'l' => '1', 'L' => '1'
    );
    $leetString = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $leetTable)) {
            $leetString .= $leetTable[$char];
        } else {
            $leetString .= $char;
        }
    }

    return $leetString;
}
?>