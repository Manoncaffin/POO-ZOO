<?php
// cette page insère les infos

class zooManager {
    private $db;
    // private array $zooArray = [];   


public function __construct(PDO $db)
{
    $this->db = $db;
}

public function add($zoo)
{
    //ajouter les autres propriétés
    $request = $this->db->prepare('INSERT INTO zoo (name, max_enclosure) 
    VALUES (:name, :max_enclosure)');
    $request->execute([
        'name' => $zoo->getName(),
        'max_enclosure' => $zoo->getEnclosureNumber(),
    ]);

    $id = $this->db->lastInsertId();
    // affecte nouvelle valeur
    $zoo->setId($id);
    // garde la valeur de l'ID dans les autres pages
    $_SESSION['id_zoo'] = $id;
} 
}

?>