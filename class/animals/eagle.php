<?php

class Eagle extends Animals 
{
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

    // définir la fonction "makesound" pour la class "Eagle"
    public function makeSound()
    {
        echo "The eagle chirps.\n";
    }  

    public function wake()
    {
        echo "The eagle fly.\n";
    }

}


?>