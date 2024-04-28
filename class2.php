<?php 
class Pi{
    public static $pi=3.1416;

    function  staticValue(){
        return self::$pi;
    }
}
$pi=new Pi;
echo $pi->staticValue();

class Vehicle{
    public static $name='Bus';
    public static $capacity;

    public function name(){
        return self::$name;
    }
    public function  capacity(){
        return self::$capacity;
    }
}
class Bus extends Vehicle{

    function bus(){
      return  parent::$name;
    }
}
$bus= new Bus;
echo "<br>";
echo $bus->bus();

class Overloading{

    function __call($name, $arguments)
    {
        $count=count($arguments);
        if($name == 'add'){
            if($count ==2){
                return array_sum($arguments);
            }
            else if($count ==3){
                return array_sum($arguments);
            }
        }
    }
}
$obj= new Overloading;
echo $obj->add(2,2);
echo $obj->add(2,2,2);

class Me{
    public $me;
    public $you;

    function __construct($e)
    {
       echo $this->me=$e;
    }


}
$me=new Me('Nirob');


?>