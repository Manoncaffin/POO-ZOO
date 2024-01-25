<?php

class Enclosure {
    private $name;
    private $cleanliness;
    private $animalsNumber;

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

    public function propertyAnimals($animals)
    {

    }

    public function addAnimals($animals)
    {

    }

    public function deleteAnimals($animals)
    {

    }

    public function cleanEnclosure($enclosure)
    {

    }



}




?>