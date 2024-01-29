<?php

abstract class Animal {
    protected string $species;
    protected int $weight;
    protected int $size;
    protected int $age;
    protected bool $isHungry;
    protected bool $isSleeping;
    protected bool $isSick;     

    // fonctions (fonctionnent en dehors de l'objet)
    abstract public function makeSound();
  
    abstract public function wake();

    // méthodes (fonctions qui passent par l'objet)
    public function setSpecies(string $species) : void
    {
        $this->species = $species;
    }

    public function getSpecies() : string
    {
        return $this->species;
    }

    public function setWeight(int $weight) : void 
    {
        $this->weight = $weight;
    }

    public function getWeight() : int
    {
        return $this->weight;
    }

    public function setSize(int $size) : void 
    {
        $this->size = $size;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function setAge(int $age) : void 
    {
        $this->age = $age;
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function eat() 
    {
        if ($this->isHungry) {
            echo $this->species . " eating.\n";
            $this->isHungry = false; 
        } else {
             echo $this->species . " not hungry at the moment.\n";
        }
    }
    // revoir
    public function sleep()
    {
        if ($this->isSleeping) {
            echo $this->species . " sleeping.\n";
            $this->isSleeping = true; 
        } else {
            echo $this->species . " are awake.\n";
        }
    }

    public function sick()
    {
        if ($this->isSick) {
            echo $this->species . " is sick.\n";
            $this->isSick = true; 
        } else {
            echo $this->species . " are fine.\n";
        }
    }

    // Affiche les caractéristiques des animaux (espèce, poids, taille, âge)
    public function displayCharacteristicsAnimals()
    {
        return [
            'Species: '=>$this->species,
            'Weight: '=>$this->weight,
            'Size: '=>$this->size,
            'Age: '=>$this->age, 
        ];
    }

    // condition dans employé (nourrit les animaux et rappeler ici)
    public function setIsHungry(bool $isHungry) : void
    {
        $this->isHungry = $isHungry;
    }

    public function getIsHungry() : bool
    {
        return $this->isHungry;
    }

    // faire la condition ici 
    public function setIsSleeping(bool $isSleeping) : void
    {
        $this->isSleeping = $isSleeping;
    }

    public function getIsSleeping() : bool
    {
        return $this->isSleeping;
    }

    // condition dans employé (soigne les animaux malades) et rappeler ici 
    public function setIsSick(bool $isSick) : void
    {
        $this->isSick = $isSick;
    }

    public function getIsSick() : bool
    {
        return $this->isSick;
    }
}

?>