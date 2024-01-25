<?php

abstract class Animals {
    // private int $id;
    protected $name;
    protected $weight;
    protected $size;
    protected $age;
    protected $isHungry;
    protected $isSleeping;
    protected $isSick;
    protected $species;


    public function __construct($name, $weight, $size, $age, $isHungry, $isSleeping, $isSick, $species) 
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->size = $size;
        $this->age = $age;
        $this->isHungry = $isHungry;
        $this->isSleeping = $isSleeping;
        $this->isSick = $isSick;
        $this->species = $species;
    }

    // méthodes (fonctions qui passent par l'objet)
    // public function setId($id) : void 
    // {
    //     $this->id = $id;
    // }

    // public function getId() : int
    // {
    //     return $this->id;
    // }

    public function setName($name) : void 
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setWeight($weight) : void 
    {
        $this->weight = $weight;
    }

    public function getWeight() : int
    {
        return $this->weight;
    }

    public function setSize($size) : void 
    {
        $this->size = $size;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function setAge($age) : void 
    {
        $this->age = $age;
    }

    public function getAge() : int
    {
        return $this->age;
    }

    // fonctions (fonctionnent en dehors de l'objet)
    public function eat() 
    {
        if ($this->isHungry) {
            echo $this->species . " est en train de manger.\n";
            $this->isHungry = false; 
        } else {
             echo $this->species . " n'a pas faim pour le moment.\n";
        }
    }

    public function sleep($aigle, $fish, $tiger, $bear)
    {
        if ($this->isSleeping) {
            echo $this->species . " est en train de dormir.\n";
            $this->isSleeping = false; 
        } else {

        }
    }

    public function wake($aigle, $fish, $tiger, $bear)
    {
        
    }

    public function sick($aigle, $fish, $tiger, $bear)
    {
        if ($this->isSick) {
            echo $this->species . " est malade.\n";
            $this->isSick = false; 
        } else {

        }
    }

    public function makeSound($aigle, $fish, $tiger, $bear)
    {
            echo $this->species . " émet un son.\n";
    }    

    public function displayCharacteristics($aigle, $fish, $tiger, $bear)
    {
            echo "Nom : ";
            echo "Poids : ";
            echo "Taille :";
            echo "Âge :";
    }

     

}

?>