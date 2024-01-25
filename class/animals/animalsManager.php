<?php

$employe1->feedAnimals();
$employe1->addAnimals();
$employe1->deleteAnimals();
$employe1->transferAnimals();

class animalsManager 
{
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function add(Animals $animals) : void
    {
        $request = $this->db->prepare("INSERT INTO animals (id, name, weight, size, age) VALUES (:id, :name, :weight, :size, :age)"); 
        $request->execute([
            'id' => $animals->getId(),
            'name' => $animals->getName(),
            'weight' => $animals->getWeight(),
            'size' => $animals->getSize(),
            'age' => $animals->getAge(),
        ]);

        $id = $this->db->lastInsertId();
        $animals->setId($id); 
    }

    public function find($id) : Animals
    {
        $request = $this->db->prepare("SELECT * FROM animals WHERE id = :id");
        $request->execute([
           'id' => $id,
        ]);
        $animalsInfo = $request->fetch();

        $class = $animalsInfo['class'];

        $animals = new $class($animalsInfo);
        $animals->setId($animalsInfo['id']);

        return $animals;
    }

    // public function update(Animals $animals) : void 
    // {
    //     $request = $this->db->prepare("UPDATE animals SET health_point = :health_point WHERE id = :id");
    //     $request->execute([
    //        'health_point' => $animals->getLifePoint(),
    //        'id' => $animals->getId()
    //     ]);
    // }
}


?>