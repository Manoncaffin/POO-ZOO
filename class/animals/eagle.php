<?php

class Eagle extends Animal 
{
    // appelle la fonction "makesound" de la class parent "Animal"
    public function makeSound() : void
    {
        echo "The eagle chirps.\n";
    }  

    public function wake()
    {
        echo "The eagle fly.\n";
    }

}


?>