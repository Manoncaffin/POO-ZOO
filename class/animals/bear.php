<?php

class Bear extends Animal
{
    // appelle la fonction "makesound" de la class parent "Animal"
    public function makeSound() : void
    {
        echo "The bear growls.\n";
    }

    public function wake()
    {
        echo "The bear walks.\n";
    }
}
