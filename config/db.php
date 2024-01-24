<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=correction_zoo', 'root', 'root');
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}

?>