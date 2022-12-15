<?php

class car6
{
public $color;
public $manufacturer;
//const MY_CONSTANT =[];

const MANUFACTURER_BMW= 'BMW';
const MANUFACTURER_TESLA ='tesla';
const MANUFACTURER__MERCEDES ='mercedes';
const COLOR_RED= 'red';
const COLOR_GREEN ='green';
const COLOR_BLUE = 'blue';


public function __construct($color,$manufacturer)
{

    $this->color =$color;
    $this->manufacturer=$manufacturer;

}
}
//$mycar = new car6(color: 'red', manufacturer: 'mercedes');
$mycar = new car6(color: car6::COLOR_GREEN, manufacturer: car6::MANUFACTURER__MERCEDES);
var_dump($mycar);
?>