<?php

class Employe {

    private string $name;
    private int $age;

    // méthodes (fonctions qui passent par l'objet)

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

    // fonctions (fonctionnent en dehors de l'objet)
    // partie à revoir, mettre méthode afficher infos animaux et afficher infos enclos
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
        $enclosure->getanimalNumber();  

        echo "Enclosure cleanliness: " . $enclosure->getCleanliness() . "\n";
        $enclosure->getcleanliness(); 
    }

    // si c'est sale et vide et mettre la méthode qui est dans enclos
    public function cleanEnclosure(Enclosure $enclosure)
    {
        echo $this->name . " cleans the enclosure.\n";
        $enclosure->setCleanliness("clean");
    }
    
    // revoir, faire condition pour que l'employé nourrissent les animaux quand ils ont faim
    public function feedAnimal(Enclosure $enclosure)
    {
        echo $this->name . " feeds the animals in the enclosure.\n";
        $animal->eat();
    }

    // méthode animaux malade
    public function cureAnimal(Animal $animal)
    {
        echo $this->name . " care for animals in the enclosure.\n";
        $animal->eat();
    }

    // revoir et ajouter la méthode de enclos
    public function addAnimal(Animal $animal, Enclosure $enclosure)
    {
        if ($enclosure->getAnimalNumber() === 6) {
            echo "The enclosure is full.\n";
        } else {
            echo "There is still room.\n";
        }

        echo $this->name . " adds a new animal to the enclosure.\n";
        $enclosure->addAnimal($animal);
    }
    // revoir et ajouter la méthode de enclos
    public function removeAnimal(Enclosure $enclosure)
    {
        echo $this->name . " removes an animal from the enclosure.\n";
        $enclosure->removeAnimal($animal);
    }

    // revoir faire condition pour que les animaux soient transférés quand l'employé nettoie
    public function transferAnimal(Enclosure $fromEnclosure, Enclosure $toEnclosure, Animal $animal)
    {
        echo $this->name . " transfers an animal from one enclosure to another.\n";
        $fromEnclosure->removeAnimal($animal);
        $toEnclosure->addAnimal($animal);
    }

    public function interfaceUser()
    {
        echo "Welcome to the zoo!\n";
    }
    
}
