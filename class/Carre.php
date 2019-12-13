<?php

class Carre extends Shape
{
    const NB_SIDE = 4;
    private $side;

    public function __construct($side,$name)
    {
        $this->side=$side;
        parent::__construct($name);
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
