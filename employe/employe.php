<?php

class Employe {

    // private $id;
    private $name;
    private $age;
    private $sexe;

    // méthodes (fonctions qui passent par l'objet)
    // public function setId($id) : void
    // {
    //     $this->id = $id;
    // }

    // public function getId()
    // {
    //     return $this->id;
    // }

    public function setName($name) : void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age) : void
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSexe($sexe) : void
    {
        $this->sexe = $sexe;

    }

    public function getSexe()
    {
        return $this->sexe;
    }

    // fonctions (fonctionnent en dehors de l'objet)
    public function examinedEnclosure(Enclosure $enclosure)
    {
        var_dump($this->name . " examines the enclosure.");
    }

    public function cleanEnclosure(Enclosure $enclosure)
    {
        var_dump($this->name . " clean the enclosure.");
    }

    public function feedAnimals(Animals $animals, Enclosure $enclosure)
    {
        var_dump($this->name . " treats an animal.");
    }

    public function addAnimals(Animals $animals, Enclosure $enclosure)
    {
        var_dump($this->name . " add an animal.");
    }

    public function deleteAnimals(Animals $animals, Enclosure $enclosure)
    {
        var_dump($this->name . " removes an animal.");
    }

    public function transferAnimals(Animals $animals, Enclosure $enclosure)
    {
        var_dump($this->name . " transfers an animal.");
    }

    public function interfaceUser()
    {
        var_dump("Take place of " . $this->name . " in the zoo.");
    }
    

    

   
}
