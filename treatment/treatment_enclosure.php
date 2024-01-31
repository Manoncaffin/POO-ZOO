<?php

session_start(); // car $_SESSION['id_employe'] dans employeManager.php

// cette page récupère les infos 
require_once('../config/db.php');
require_once('../enclosure/enclosureManager.php');
require_once('../enclosure/enclosure.php');

if(

    isset($_POST["nameEnclosure"]) && !empty($_POST["nameEnclosure"]) &&
    isset($_POST["typeEnclosure"]) && !empty($_POST["typeEnclosure"]) &&
    isset($_POST["maxAnimals"]) && !empty($_POST["maxAnimals"]) 
    
    ) {
    
        $enclosureManager = new enclosureManager($db);
        // à gauche : valeur du tableau associatif (clé) dans employe.php// à droite : input name 
        $enclosure = new enclosure([
        'nameEnclosure' => $_POST['nameEnclosure'],
        'typeEnclosure' => $_POST['typeEnclosure'],
        'maxAnimals' => $_POST['maxAnimals'],
    ]);
    
    $enclosureManager->add($enclosure);
    
    }








?>