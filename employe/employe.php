<?php

class Employe {

    private string $name;
    private int $age;
    private string $gender;

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

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    
    public function getGender()
    {
        return $this->gender;
    }

    // fonctions (fonctionnent en dehors de l'objet)
    public function examinedEnclosure(Enclosure $enclosure)
    {
        echo $this->name . " examines the enclosure: " . $enclosure->getName() . "\n";
        
        if($enclosure->getCleanliness() === 'clean') {
            echo "Enclosure cleanliness: the enclosure is clean.\n";
        } else {
            echo "Enclosure cleanliness: the enclosure needs cleaning.\n";
        }

        echo "Animals in the enclosure: " . $enclosure->getanimalNumber() . "\n";

        if($enclosure->getanimalNumber() === 6) {
            echo "The enclosure is full.";
        } else {
            echo "There is still space.";
        }
    }

    // la condition est rappelée dans animal
    public function feedAnimal(Animal $animal)
    {
        if ($animal->getIsHungry()) {
            if ($animal->getIsSleeping()) {
                echo "The animal is sleeping and doesn't need to eat right now.";
            } else {
                $animal->setIsHungry(true);
                echo "The employee fed the animals well.";
        }
        } else {
                echo "The animal is not hungry.";
            }
        }
   

    // la condition est rappellée dans enclos
    public function cleanlinessEnclosure(Enclosure $enclosure)
    {
        if ($enclosure->getCleanliness() === 'clean') {
            echo "The condition of the enclosure is clean.";
        } elseif ($enclosure->getCleanliness() === 'fair') {
            $enclosure->setCleanliness('propre');
            echo "The enclosure was passable, it became clean.";
        } elseif ($enclosure->getCleanliness() === 'dirty') {
            $enclosure->setCleanliness('passable');
            echo "The enclosure was dirty, it became a little cleaner!";
        } else {
            echo "Invalid cleanliness level.";
        }
    }
    
   // faire la condition ici et la rappeler dans animal
    public function cureAnimal(Animal $animal)
    {
        if($animal->getIsSick()) {
            $animal->setIsSick(false);
            echo "The employee takes care of the animals.";
        } else {
            echo "The employee takes care of the animals.";
        }
    }

    public function addAnimal(Animal $animal, Enclosure $enclosure)
    {
        $enclosure->addAnimal($animal);
    }

    public function removeAnimal(Enclosure $enclosure, Animal $animal)
    {
        $enclosure->removeAnimal($animal);
    }

    // revoir faire condition pour que les animaux soient transférés quand l'employé nettoie
    public function transferAnimal(Enclosure $fromEnclosure, Enclosure $toEnclosure, Animal $animal)
    {
        $fromEnclosure->removeAnimal($animal);
        $toEnclosure->addAnimal($animal);
    }

    public function interfaceUser()
    {
        echo "Welcome to the zoo!\n";
    }



}
