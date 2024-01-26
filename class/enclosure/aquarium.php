<?php

class Aquarium extends Enclosure {
    
    protected $waterSalinity;

    public function __construct($name, $weight, $size, $age, $isHungry, $isSleeping, $isSick, $species, $waterSalinity) 
    {
        parent::__construct($name, $weight, $size, $age, $isHungry, $isSleeping, $isSick, $species);
        $this->waterSalinity = $waterSalinity;
    }
}




?>