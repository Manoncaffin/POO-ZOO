<?php
// cette page insère les infos

class employeManager
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function add($employe)
    {
        //ajouter les autres propriétés
        var_dump($_SESSION['id_zoo']);
        $request = $this->db->prepare('INSERT INTO employe (name, age, gender, id_zoo) 
        VALUES (:name, :age, :gender, :id_zoo)');
        $request->execute([
            'name' => $employe->getName(),
            'age' => $employe->getAge(),
            'gender' => $employe->getGender(),
            'id_zoo' => $_SESSION['id_zoo'],
        ]);

        $id = $this->db->lastInsertId();
        // affecte nouvelle valeur
        $employe->setId($id);
        // garde la valeur de l'ID dans les autres pages 
        $_SESSION['id_employe'] = $id;
    }
}
