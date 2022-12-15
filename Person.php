<?php

class Person
{
   // public $name = "Jane";
   // private $phone = 12345699;

    // public function __construct()
    // {
    //   echo "__construct is callled" . PHP_EOL;
    // }

    // public function __destruct()
    //{
    // echo "__destruct is callled" . PHP_EOL;
    // }

    // public function __toString()
    //{

    //  return "Name: $this->name. Phone: $this->phone";

    //   }
//}
    //public function __get($propName){

    //   if ($propName === 'username') {
    //      return $this->name;
    //  }
    //  return "Property \"$propName\"does not exit";
    //}
//}

//public function __set($propName, $value){

    // var_dump($propName, $value);

    //if($propName === 'username')
    // {
    // $this->name =$value;
    //  }
//}
//}


    // public function __call($name, $arguments)
    // {

    // var_dump($name, $arguments);

    //  if ($name === 'getMobilePhone') {
    //    return $this->getPhone();
    //} else if ($name === 'setMobilePhone') {
    //$this->setPhone($arguments[0]);
    //     call_user_func_array([$this, 'setPhone'], $arguments);
    // }

    // }

    // public function getPhone()
    //{
    //   return $this->phone;
    // }

    //  public function setPhone($phone)
    //{
    // $this->phone = $phone;
    //}
//}

//public static function __callStatic($name,$arguments){
//echo "\"$name\"static method";

//}
//}

   //public function __invoke()
   //{

      // return "object";
   // }

//}

//$p = new Person();
 //$p->username = 'Mary';
///echo $p->name;
//echo $p->getMobilePhone();
//$p->setMobilePhone('11111111');
//echo $p->getMobilePhone();
//Person::heloo();

//var_dump(is_callable($p));
//echo$p();

//$serialized = serialize($p);
//$newPerson = unserialize($serialized);
//var_dump($newPerson);

//clone method
public $name;
private $phone;
public function __construct ($name, $phone)
{
$this->name =$name;
$this->phone =$phone;

}

public function __clone()
{
    var_dump($this);
}
}

$p= new Person( name: "Jane", phone: '1234567889');
var_dump($p);
$newPerson = clone $p;

?>