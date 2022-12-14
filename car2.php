<?php

class car
{
//public $color;
    private $color ='red';
    public $weight;
    private $availabeColor = [
        'red', 'green'
    ];
private $year;
public function setYear($year)
{
    $this->year = $year;
}
public function getYear()
{
    return $this->year;
}
public function setColor($color)
{

    if (in_array($color, $this->availabeColor)) {


         return $this->color = $color;
    }

}
public function getColor(){
    return $this->color;
}}
$myCar = new Car();
//$myCar->color ='red';
//$myCar->setYear(year:2022);
//echo $myCar->getYear(). '<br>';
//echo $myCar->color;

$myCar->setColor(color: 'green');
echo $myCar->getColor();

?>