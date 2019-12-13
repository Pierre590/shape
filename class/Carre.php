<?php

class Carre extends Shape
{
    const NB_SIDE = 4;
    private $side;

    public function __construct($side)
    {
        $this->side=$side;
    }
    public function perimeter()
    {
        return $this->side * self::NB_SIDE;
    }
    public function area()
    {
        return $this->side * $this->side;
    }
}
