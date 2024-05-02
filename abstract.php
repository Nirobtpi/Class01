<?php 
 abstract class ParentClass{
    abstract function someMethod1();
    abstract function someMethod2($name, $color);
    abstract function someMethod3();
 }

 class ChildClass extends ParentClass{
    function someMethod1(){

    }
    function someMethod2($name, $color){
        echo 'This is a '. $name . ' and color is ' . $color;
    }
    function someMethod3(){

    }
 }

 $obj=new ChildClass;
 $obj->someMethod2('Mango','Red');
 echo "<br>";

 abstract class Car{
   public $name;
    function __construct($name)
   {
      $this->name=$name;
   }
   abstract function intro();
 }

 class Audi extends Car{

   function intro()
   {
      return "Choose German quality! I'm an $this->name!";
   }
 }
$audi=new Audi('Audi');
echo $audi->intro();
echo "<br>";

class Bmw extends Car{

   function intro()
   {
      return "Choose India quality! I'm an $this->name";
   }
}
$bmw=new Bmw('Bmw');
echo $bmw->intro();
?>