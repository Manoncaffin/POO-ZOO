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
            echo "$this->animalNumber Animaux maximum, vous ne vpivez pas en ajouter d'autres";
        } else {
            echo "Vous avez ajouté un" . $animal->getspecies();
            $this->animals[] = $animal;
        }
    }

    public function maintainEnclosure()
    {
        
    }
}


?>