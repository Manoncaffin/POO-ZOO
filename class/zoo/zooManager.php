<?php

require_once ('../config/db.php');

$zooManager = new zooManager($db);
$createZoo = $zooManager->main();

if(
    isset($_POST["zooName"]) && !empty($_POST["zooName"])&&
    isset($_POST["yourName"]) && !empty($_POST["yourName"]) &&
    isset($_POST["yourAge"]) && !empty($_POST["yourAge"]) &&
    isset($_POST["yourGender"]) && !empty($_POST["yourGender"]) &&
    isset($_POST["maxEnclosure"]) && !empty($_POST["maxEnclosure"])

) { 

    $zooManager = new zooManager($db);

    $zoo = new zoo([
        'zooName' => $_POST['zooName'],
        'yourName' => $_POST['yourName'],
        'yourAge' => $_POST['yourAge'],
        'yourGender' => $_POST['yourGender'],
        'maxEnclosure' => $_POST['maxEnclosure']
    ]);
}

$zooManager->add($zoo)

class zooManager {
    private $db;
    private array $zooArray = [];   
}

public function __construct(PDO $db)
{
    $this->db = $db;
}
public function add($zoo)
{
    $request = $this->db->prepare('INSERT INTO zoo (name)
    VALUES (:name)');
    $request->execute([
        'zooName' => $zoo->getName(),
    ]);
    $id = $this->db->lastInsertId();
    $zoo->setId($id);
}

?>