<?php

abstract class Enclosure {
    protected string $name;
    protected string $cleanliness;
    protected int $animalNumber;
    protected int $typeEnclosure;
    protected int $id;
    protected int $id_zoo;
   

    protected array $animals = [];


    public function __construct(array $data) {
        $this->name = $data['nameEnclosure']; // la valeur dans le tableau est un nom choisi par hasard
        $this->typeEnclosure = $data['typeEnclosure'];
        $this->animalNumber = $data['maxAnimals'];
        // $this->id = $data['id'];
        // $this->id_zoo = $data['id_zoo'];
    }

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

    public function setAnimalNumber(int $animalNumber)
    {
        $this->animalNumber = $animalNumber;
    }

    public function getAnimalNumber() : int
    {
        return $this->animalNumber;
    }

    public function setAnimalsArray($animals)
    {
        $this->animals = $animals;
    }

    public function getAnimalsArray() : array 
    {
        return $this->animals;
    }

    public function setTypeEnclosure($typeEnclosure)
    {
        $this->typeEnclosure = $typeEnclosure;
    }

    public function getTypeEnclosure()
    {
        return $this->typeEnclosure;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId_zoo($id_zoo)
    {
        $this->id_zoo = $id_zoo;
    }

    public function getId_zoo()
    {
        return $this->id_zoo;
    }

    // le tableau est dans "animal.php"
    public function displayCharacteristicsAnimals(array $animals)
    {
        foreach ($animals as $animal) {
            $animal->displayCharacteristicsAnimals();
        }
    }

    public function addAnimal(Animal $animal) {
        if ($this->getanimalNumber() >= 6) {
            echo "$this->animalNumber maximum, the enclosure is full.\n";
        } else {
            if($animal instanceof Tiger || $animal instanceof Bear) {
                echo "You are added an" . $animal->getSpecies();
                $this->animals[] = $animal;
                $this->setAnimalNumber($this->animalNumber +1);
            }
        }
    }

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

    // Affiche les caractéristiques de l'enclos (nom, propreté, nombre d'animaux)
    // pourquoi on ne fait pas de set ou de get pour animalNumber ?
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