<?php

abstract class Enclosure {
    protected string $name;
    protected string $cleanliness;
    protected int $animalNumber;

    // Je ne comprends pas ?
    protected array $animals = [];

    // méthodes (fonctions qui passent par l'objet)
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setCleanliness(string $cleanliness)
    {
        $this->cleanliness = $cleanliness;
    }

    public function getCleanliness() : string
    {
        return $this->cleanliness;
    }

    public function setAnimalNumber(array $animalNumber)
    {
        $this->animalNumber = $animalNumber;
    }

    public function getAnimalNumber() : array
    {
        return $this->animalNumber;
    }

     // Fonctions (fonctionnent en dehors de l'objet)
    public function cleanlinessEnclosure(Enclosure $enclosure, string $cleanliness)
    {
    // Vérifie la propreté 
    if ($cleanliness === 'propre') {
        echo "The condition of the enclosure is clean.";
    } elseif ($cleanliness === 'passable') {
        echo "The condition of the enclosure is fair, it will have to be cleaned soon.";
    } elseif ($cleanliness === 'sale') {
        echo "The condition of the enclosure is bad, it needs to be cleaned.";
    } else {
        echo "Invalid cleanliness level.";
    }
}

    // le tableau est dans "animal.php"
    public function displayCharacteristicsAnimals(array $animals)
    {
        foreach ($animals as $animal) {
            $animal->displayCharacteristicsAnimals();
        }
    }

    abstract public function addAnimal(Animal $animal);

    public function removeAnimal(Animal $animal)
    {
        if(count($this->animals) >= 1) {
            foreach ($this->animals as $key => $value) {
                array_splice($this->animals, $key, $key);
                $this->animalNumber = count($this->animals);
            }
        } else {
            echo "You cannot remove an animal because there is no animal in the enclosure.";
        }
    }

    abstract public function maintainEnclosure();

    // Affiche les caractéristiques de l'enclos (nom, propreté, nombre d'animaux)
    public function displayCharacteristicsEnclosure() : array
    {
        return [
            'Name: ' => $this->name,
            'Cleanliness: ' =>$this->cleanliness,
            'Animals number: ' =>$this->animalNumber
        ];
    }



}




?>