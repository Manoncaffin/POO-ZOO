<?php

session_start(); // car $_SESSION['id_employe'] dans employeManager.php

// cette page récupère les infos 
require_once('../config/db.php');
require_once('../employe/employeManager.php');
require_once('../employe/employe.php');

if(

isset($_POST["yourName"]) && !empty($_POST["yourName"]) &&
isset($_POST["yourAge"]) && !empty($_POST["yourAge"]) &&
isset($_POST["yourGender"]) && !empty($_POST["yourGender"])

) {

    $employeManager = new employeManager($db);
    // à gauche : valeur du tableau associatif (clé) dans employe.php// à droite : input name 
    $employe = new employe([
    'employeName' => $_POST['yourName'],
    'employeAge' => $_POST['yourAge'],
    'employeGender' => $_POST['yourGender'],
]);

$employeManager->add($employe);

}