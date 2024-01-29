<?php

class Terrarium extends Enclosure {

    protected $size;

    // Affiche les caractéristiques de l'enclos (nom, propreté, nombre d'animaux)
    public function displayCharacteristicsEnclosure() : array
    {
        return [
            'Name: ' => $this->name,
            'Cleanliness: ' =>$this->cleanliness,
            'Animals number: ' =>$this->animalNumber,
            'Enclosure size: ' =>$this->size,
        ];
    }

    public function addAnimal(Animal $animal)
    {
        if($this->animalNumber >= 6) {
            echo $this->animalNumber . " :limit reached, you cannot add more tigers or bears.";
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