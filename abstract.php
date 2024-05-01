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

?>