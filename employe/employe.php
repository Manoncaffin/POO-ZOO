<?php

class Employe {

    private $id;
    private $name;
    private $age;
    private $sexe;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

    }

    public function getSexe()
    {
        return $this->sexe;
    }

   
}