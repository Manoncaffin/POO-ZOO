<?php

class Tiger extends Animal {

    // appelle la fonction "makesound" de la class parent "Animal"
    public function makeSound() : void
    {
        echo "The tiger roars.\n";
    }   

    public function wake()
    {
        echo "The tiger walks.\n";
    }

}

?>