<?php

//class ParentClass
//{
// public $property1 = '1';
// protected $property2 = '2';
// private $property3 = '3';

// public function getProperty2()
// {
//     return $this->property2;
//  }

//}

//class ChildClass extends ParentClass
//{


//public $property1 = '11';
// protected $property2 ='22';
//}


//$obj = new ChildClass();
//echo $obj->property1;
//echo $obj->getProperty2();


// Clasa Person

class Person
{

    public $name;
    protected $age;
    private $phone;

    public function __construct($name, $age, $phone)
    {

        $this->name = $name;
        $this->phone = $phone;
        $this->age = $age;
    }

    //public function hello()
    //{
       // return "Heloo from p";
   //}

    public function getAge()
    {
        return $this->age;
    }
}

class Employee extends Person
{
    private $salary;

    public function __construct($name, $age, $phone, $salary)
    {
        parent::__construct($name, $age, $phone);
        $this->salary = $salary;

    }

    public function hello()
    {
        return "Heloo from p : $this->name";
    }

}
class Student extends Person{
    public $studentNo;
    public function __construct($name, $age, $phone , $studentNo)
    {
        parent::__construct($name, $age, $phone);
        $this->studentNo =$studentNo;
    }
    public function heloo()
    {
        return "I am student: $this->name. with No : $this->studentNo";
    }
}

$employee = new Employee(name: "John", age: 27, phone: '123456667', salary: 2000);
$student = new Student(name: "John", age: 27, phone: '123456667', studentNo: '212233');
echo $student->heloo();

?>