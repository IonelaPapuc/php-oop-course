<?php

trait FlayableTrait{
   abstract public function fly();
       public function heloo()
       {
           echo " i am a fly";
       }


//{
  // echo "i am flying";
//}

}
trait EngineTrait
{
    public function heloo()
    {
        echo "i have an 2";
    }
}

class Plain
{
//public function fly()
//{
   // echo "i am flying";
//}

//use MyTrait;
    use FlayableTrait, EngineTrait{
        FlayableTrait::heloo insteadof  EngineTrait;
        EngineTrait::heloo as engineHello;
    }
public function fly()
{
    echo "i am fying at 30000";
}
}

//class Helicopter
//{
    //public function fly()
   // {
        //echo "i am flaying";

    //}

  //  use FlayableTrait, EngineTrait;


   // public function fly()
   // {
       // echo "i am fying at 3010";
    //}
//}



//class Car {
// use EngineTrait;
//}

$plain = new Plain();
//$helicopter =new Helicopter();
$plain -> heloo();
//$helicopter->fly();

$plain->engineHello();
?>