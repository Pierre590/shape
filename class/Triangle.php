<?php

class Triangle extends Shape
{
    private $h;
    private $b;
    private $d;

    public function __construct($h,$b,$d)
    {
        $this->h=$h;
        $this->b=$b;
        $this->d=$d;
    }
    public function perimeter()
    {
        return $this->h+$this->b+$this->d;
    }
    public function area()
    {
        return ($this->h * $this->b)/2;
    }
}
