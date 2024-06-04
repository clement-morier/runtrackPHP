<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if ($username === 'John' && $password === 'Rambo') {
        echo "ce n'est pas ma guerre";
    } else {
        echo "votre pire cauchemar";
    }
} else {
    echo "Aucune donnée reçue.";
}
?>