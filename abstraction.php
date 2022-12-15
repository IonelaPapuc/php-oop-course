<?php

abstract class Shape
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function getArea(): float;

    public function getColor()
    {
        return $this->color;
    }
}

class Triangle extends Shape
{
    public function getArea(): float
    {

    }
}

class Circle extends Shape
{

    public $radius;
    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius= $radius;
    }

    public function getArea(): float
    {
return $this->radius * $this->radius * 3.14;
    }
}

class Rectangle extends Shape
{
    public $width;
    public $length;
    public function __construct($color, $width , $length)
    {
        parent::__construct($color);
        $this ->length =$length;
        $this ->width =$width;
    }

    public function getArea(): float
    {
return  $this->width * $this->length;
    }
}

$t = new Rectangle(color: "red",width: 10, length: 5) ;
$circle = new Circle(color: 'blue', radius: 5);
echo $t->getArea() .'<br>';
echo $circle->getArea();