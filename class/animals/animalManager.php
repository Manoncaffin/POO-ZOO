<?php

$employe1->feedAnimal();
$employe1->addAnimal();
$employe1->deleteAnimal();
$employe1->transferAnimal();

class animalManager 
{
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function add(Animal $animal) : void
    {
        $request = $this->db->prepare("INSERT INTO animals (species, weight, size, age) VALUES (:species, :weight, :size, :age)"); 
        $request->execute([
            'name' => $animal->getSpecies(),
            'weight' => $animal->getWeight(),
            'size' => $animal->getSize(),
            'age' => $animal->getAge(),
        ]);
    }

    // public function find($id) : Animal
    // {
    //     $request = $this->db->prepare("SELECT * FROM animal WHERE id = :id");
    //     $request->execute([
    //        'id' => $id,
    //     ]);
    //     $animalsInfo = $request->fetch();

    //     $class = $animalsInfo['class'];

    //     $animals = new $class($animalsInfo);
    //     $animals->setId($animalsInfo['id']);

    //     return $animal;
    // }

    // public function update(Animal $animal) : void 
    // {

    // }
}


?>