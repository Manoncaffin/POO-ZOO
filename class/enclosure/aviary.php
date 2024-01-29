<?php

class Aviary extends Enclosure {

    protected $height;

    // Affiche les caractéristiques de l'enclos (nom, propreté, nombre d'animaux)
    public function displayCharacteristicsEnclosure() : array
    {
        return [
            'Name: ' => $this->name,
            'Cleanliness: ' =>$this->cleanliness,
            'Animals number: ' =>$this->animalNumber,
            'Aviary height: ' =>$this->height,
        ];
    }

    public function addAnimal(Animal $animal)
    {
        if($this->animalNumber >= 6) {
            echo $this->animalNumber . " :limit reached, you cannot add more birds.";
        } else {
            echo "You have added a/an" . $animal->getspecies();
            $this->animals[] = $animal;
        }
    }

    public function maintainEnclosure()
    {
        
    }
}


?>