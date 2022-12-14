<?php

class car5
{
public $color ='red';
private  $weight= 2000;

static $counter = 0;
public  $myCounter = 0;
public function __construct()
{
    $this->myCounter++;
    self::$counter++;
}
}
$myCar = new Car5();
echo Car5::$counter . ' ' . $myCar->myCounter . PHP_EOL .'<br>';
$myCar2 = new Car5() ;
echo Car5::$counter . ' ' . $myCar->myCounter . PHP_EOL;
?>