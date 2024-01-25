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
    public function examinedEnclosure($enclosure)
    {

    }

    public function cleanEnclosure($enclosure)
    {

    }

    public function feedAnimals($animals)
    {

    }

    public function addAnimals($animals)
    {

    }

    public function deleteAnimals($animals)
    {

    }

    public function transferAnimals($animals)
    {

    }

    public function interfaceUser()
    {

    }
    

    

   
}
