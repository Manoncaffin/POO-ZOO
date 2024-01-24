<?php

class animals {
    private int $id;
    private string $name;
    private int $weight;
    private int $size;
    private int $age;

    public function __construct($id, $weight, $size, $age, $name) 
    {
        
    }

    public function setId($id) : void 
    {
        $this->id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setName($name) : void 
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setWeight($weight) : void 
    {
        $this->weight = $weight;
    }

    public function getWeight() : int
    {
        return $this->weight;
    }

    public function setSize($size) : void 
    {
        $this->size = $size;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function setAge($age) : void 
    {
        $this->age = $age;
    }

    public function getAge() : int
    {
        return $this->age;
    }


    public function eat($aigle, $fish, $tiger, $bear) 
    {
        
    }

    public function sleep($aigle, $fish, $tiger, $bear)
    {
        
    }

    public function wake($aigle, $fish, $tiger, $bear)
    {
        
    }

    public function sick($aigle, $fish, $tiger, $bear)
    {
        
    }

    public function sound($aigle, $fish, $tiger, $bear)
    {
        
    }    


    public function display($aigle, $fish, $tiger, $bear)
    {
        
    }

}

?>