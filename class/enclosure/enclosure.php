<?php

abstract class Enclosure {
    private $name;
    private $cleanliness;
    private $animalsNumber;

    public function __construct($name, $cleanliness, $animalsNumber)
    {
        $this->name = $name;
        $this->cleanliness = $cleanliness;
        $this->animalsNumber = $animalsNumber;
    }

    // méthodes (fonctions qui passent par l'objet)
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCleanliness($cleanliness)
    {
        $this->cleanliness = $cleanliness;
    }

    public function getCleanliness()
    {
        return $this->cleanliness;
    }

    public function setAnimalsNumber($animalsNumber)
    {
        $this->animalsNumber = $animalsNumber;
    }

    public function getAnimalsNumber()
    {
        return $this->animalsNumber;
    }

     // fonctions (fonctionnent en dehors de l'objet)
    public function propertyEnclosure($enclosure)
    {

    }

    public function propertyAnimals(Animal $animals)
    {

    }

    public function addAnimals(Animal $animals)
    {

    }

    public function deleteAnimals(Animal $animals)
    {

    }

    public function cleanEnclosure($enclosure)
    {

    }

    // abstract public function detailEnclosure()
    // {

    // }



}




?>