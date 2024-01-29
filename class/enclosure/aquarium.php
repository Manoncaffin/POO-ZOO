<?php

class Aquarium extends Enclosure {
    
    protected $waterSalinity;

    // Affiche les caractéristiques de l'enclos (nom, propreté, nombre d'animaux)
    public function displayCharacteristicsEnclosure() : array
    {
        return [
            'Name: ' => $this->name,
            'Cleanliness: ' =>$this->cleanliness,
            'Animals number: ' =>$this->animalNumber,
            'Water salinity: ' =>$this->waterSalinity,
        ];
    }

    public function addAnimal(Animal $animal)
    {
        if($this->animalNumber >= 6) {
            echo $this->animalNumber . " :limit reached, you cannot add more fish.";
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