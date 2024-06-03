<!DOCTYPE html>
<html>
<head>
    <title>Types de Variables en PHP</title>
</head>
<body>

<?php
$intVar = 42;
$floatVar = 3.14;
$stringVar = "Hello, World!";
$boolVar = true;
$nullVar = null;
$variables = [
    ['type' => 'integer', 'name' => 'intVar', 'value' => $intVar],
    ['type' => 'double', 'name' => 'floatVar', 'value' => $floatVar],
    ['type' => 'string', 'name' => 'stringVar', 'value' => $stringVar],
    ['type' => 'boolean', 'name' => 'boolVar', 'value' => $boolVar ? 'true' : 'false'],
    ['type' => 'NULL', 'name' => 'nullVar', 'value' => 'NULL']
];
?>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables as $variable) : ?>
            <tr>
                <td><?php echo $variable['type']; ?></td>
                <td><?php echo $variable['name']; ?></td>
                <td><?php echo $variable['value']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>