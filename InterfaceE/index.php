<?php
interface  MyInterface{
 //const MY_CONSTANT =1;
 //public function __construct();
    public function method1();

   // public function method2();
}




interface  MyInterface2 extends MyInterface {

    public function method2(): string;

}
interface  MyInterface3{

    public function method3();


}




 //abstract class MyClass implements MyInterface
//{

   // public function method2()
   // {

    //}
 //}
class MyClass implements  MyInterface2,MyInterface3 {
    public function method1()
    {

    }
    public function method2(): string
    {

    }

}
//echo MyInterface::MY_CONSTANT;
$myClass =new MyClass2();
?>