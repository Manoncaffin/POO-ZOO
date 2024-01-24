<?php

class animalsManager 
{
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function add(animals $animals) : void
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
}


?>