<?php
// cette page récupère les infos 
require_once('../config/db.php');
require_once('../class/zoo/zoo.php');
require_once('../class/zoo/zooManager.php');

session_start();

if(
    isset($_POST["zooName"]) && !empty($_POST["zooName"])&&
    isset($_POST["maxEnclosure"]) && !empty($_POST["maxEnclosure"])

) { 

    $zooManager = new zooManager($db);

    // à gauche : valeur du tableau associatif (clé) dans zoo.php// à droite : input name 
    $zoo = new zoo([
        'zooName' => $_POST['zooName'],
        'max_enclosure' => $_POST['maxEnclosure']
    ]);

    $zooManager->add($zoo);

    header('Location: ../employe_interface.php');
}




?>