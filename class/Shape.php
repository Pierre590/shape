<?php

abstract class Shape  //pr placer un prerequis : calcul  obligatoire du perimetre et de la surface des formes//
{
    const UNIT = " m";       //placer dedans tout ce qui est commun aux class//
    protected $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function displayPerimeter()
    {
        echo "Le ". $this->name ." à un périmetre de ".$this->perimeter(). self::UNIT;
    }
    public function displayArea()
    {
        echo "Le ". $this->name ." à une surface de ".$this->area(). self::UNIT . '²';
    }
    abstract public function perimeter();
    abstract public function area();
}
