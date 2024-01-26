<?php

class Fish extends Animals {

    public function __construct($name, $weight, $size, $age, $isHungry, $isSleeping, $isSick, $species) 
    {
        parent::__construct($name, $weight, $size, $age, $isHungry, $isSleeping, $isSick, $species);
    }
    
    // appelle la fonction "makesound" de la class parent "Animals"
    public function specificSound()
    {
        $this->makeSound();
    }
    
    public function specificAction()
    {
        $this->wake();
    }

    public function makeSound()
    {

    } 
    
    public function wake()
    {
        echo "The fish swim.\n";
    }


}


?>