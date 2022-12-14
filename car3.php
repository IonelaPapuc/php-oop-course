<?php

class car3
{


    private $color ='red';
    public $weight;

    public $year;
}

//$car =new car2();
//$car22= $car;

//$car= null;
//var_dump($car22);

$car= new car3();
$car3= clone $car;

var_dump($car);


?>

