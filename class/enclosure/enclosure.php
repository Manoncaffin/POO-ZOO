<?php

abstract class Enclosure {
    private $name;
    private $cleanliness;
    private $animalsNumber = [];

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
    public function propertyEnclosure(Enclosure $enclosure)
    {

    }

    public function propertyAnimals(Animals $animals)
    {

    }

    public function addAnimals(Animals $animals)
    {

    }

    public function removeAnimals(Animals $animals)
    {

    }

    // abstract public function detailEnclosure()
    // {

    // }



}




?>