<?php

class Zoo {

    // private $id;
    private $name;
    private $employe;
    private $maxEnclosure;
    private $enclosureArray;

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

    public function setEmploye($employe)
    {
        $this->employe = $employe;
    }

    public function getEmploye()
    {
        return $this->employe;
    }

    public function setEnclosureNumber($maxEnclosure)
    {
        $this->maxEnclosure = $maxEnclosure;
    }

    public function getEnclosureNumber()
    {
        return $this->maxEnclosure;
    }

    public function setEnclosureArray($enclosureArray)
    {
        $this->enclosureArray = $enclosureArray;
    }

    public function getEnclosureArray()
    {
        return $this->enclosureArray;
    }

    // fonctions (fonctionnent en dehors de l'objet)
    public function enclosureContent()
    {

    }

    public function animalsNumber($animals)
    {

    }

    public function main()
    {
    // while
//     Pour chaque animal du zoo, on va aléatoirement modifier les valeurs des variables d'instance de cet animal (par exemple on le rend malade, on l'endort ou on l'affame).
//     Pour chaque enclos, on modifie aléatoirement son état de propreté, sa salinité, etc...
//     Enfin on passe la main à l'employé (donc à vous, utilisateur) pour qu'il s'occupe du zoo.
    }


    

    



}
