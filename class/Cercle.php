<?php

class Cercle extends Shape
{
    private $ray;

    public function __construct($ray)
    {
        $this->ray=$ray;
    }
    public function perimeter($decimals = 2)
    {
        return round($this->ray * 2 * pi(), $decimals);
    }
    public function area($decimals = 2)
    {
        return round(pi()*pow($this->ray,2), $decimals);
    }
}
