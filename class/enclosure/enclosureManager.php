<?php
// cette page insère les infos

class enclosureManager
{

private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function add($enclosure)
    {
        //ajouter les autres propriétés
        var_dump($_SESSION['id_zoo']);
        $request = $this->db->prepare('INSERT INTO enclosure (name, id_zoo, type_enclosure, animals_number, cleanliness) 
        VALUES (:name, :id_zoo, :type_enclosure, :animals_number, :cleanliness)');
        $request->execute([
            'name' => $enclosure->getName(),
            'age' => $enclosure->getAge(),
            'gender' => $enclosure->getGender(),
            'id_zoo' => $_SESSION['id_zoo'],
        ]);

        $id = $this->db->lastInsertId();
        // affecte nouvelle valeur
        $enclosure->setId($id);
        // garde la valeur de l'ID dans les autres pages 
        $_SESSION['id_enclosure'] = $id;
    }

}

?>