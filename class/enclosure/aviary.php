<?php

class Aviary extends Enclosure {

    protected $height;

    public function __construct($name, $weight, $size, $age, $isHungry, $isSleeping, $isSick, $species, $height) 
    {
        parent::__construct($name, $weight, $size, $age, $isHungry, $isSleeping, $isSick, $species);
        $this->height = $height;
    }
}


?>