<?php

class Car4
{
    private $color = 'red';
    //private $weight = 2000;

    public function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }

    public function getColor()
    {
        return $this->color;
    }
         public function setColor($color)
        {
            $this->color = $color;
        }


    }
?>