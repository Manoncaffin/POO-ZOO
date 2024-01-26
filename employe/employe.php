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
    // partie à revoir
    public function examinedEnclosure(Enclosure $enclosure)
    {
        echo $this->name . " examines the enclosure.\n";
        $enclosure->getName();

        if ($enclosure->getCleanliness() === 'clean') {
            echo "The enclosure is clean.\n";
        } else {
            echo "The enclosure needs cleaning.\n";
        }

        echo "Animals in the enclosure:\n";
        $enclosure->getanimalsNumber();  

        echo "Enclosure cleanliness: " . $enclosure->getCleanliness() . "\n";
        $enclosure->getcleanliness(); 
    }

    public function cleanEnclosure(Enclosure $enclosure)
    {
        echo $this->name . " cleans the enclosure.\n";
        $enclosure->setCleanliness("clean");
    }
    

    public function feedAnimals(Animals $animals)
    {
        echo $this->name . " feeds the animals in the enclosure.\n";
        $animals->eat();
    }

    public function cureAnimals(Animals $animals)
    {
        echo $this->name . " care for animals in the enclosure.\n";
        $animals->eat();
    }

    // revoir 
    public function addAnimals(Animals $animals, Enclosure $enclosure)
    {
        if ($enclosure->getAnimalsNumber() === 6) {
            echo "The enclosure is full.\n";
        } else {
            echo "There is still room.\n";
        }

        echo $this->name . " adds a new animal to the enclosure.\n";
        $enclosure->addAnimals($animals);
    }

    public function removeAnimals(Animals $animals, Enclosure $enclosure)
    {
        echo $this->name . " removes an animal from the enclosure.\n";
        $enclosure->removeAnimals($animals);
    }

    public function transferAnimals(Animals $animals, Enclosure $fromEnclosure, $toEnclosure)
    {
        echo $this->name . " transfers an animal from one enclosure to another.\n";
        $fromEnclosure->removeAnimals($animals);
        $toEnclosure->addAnimal($animals);
    }

    public function interfaceUser()
    {
        echo "Welcome to the zoo!\n";
    }
    
}
