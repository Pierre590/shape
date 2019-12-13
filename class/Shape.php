<?php

abstract class Shape  //pr placer un prerequis : calcul  obligatoire du perimetre et de la surface des formes//
{
    const UNIT = "m";      //placer dedans tout ce qui est commun aux class//
    protected $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function displayPerimeter($unit = "m")
    {
        if ($unit === "mm") {
            $perimeter = $this->perimeterToMm();
        } else{
            $perimeter = $this->perimeter();
        }

        echo "Le ". $this->name ." à un périmetre de ". $perimeter . ' ' . $unit;
    }
    public function displayArea()
    {
        echo "Le ". $this->name ." à une surface de ".$this->area(). self::UNIT . '²';
    }
    public function perimeterToMm()
    {
        return $this->perimeter() * 1000;
    }
    public function areaToMm()
    {
        return $this->area() * 1000;
        echo "Le ". $this->name ." à un périmetre de ".$mm." mm";
    }
    abstract public function perimeter();
    abstract public function area();
}
