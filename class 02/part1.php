<?php 

session_start();
$user_id=['nirob',10,2020];
 $_SESSION['user_id']=$user_id;

class Car{
    private $color;

    public function setColor($color){
        $this->color=$color;
    }
   public static function drive(){
        echo "Car is driving";
    }
    public function getColor(){
        echo $this->color;
    }
}

$car=new Car;
// $car->setColor('Green');
// $car->getColor();

// $car->drive();
Car::drive();

class Bus{


    public function __construct(){
        echo "This is a bus";
    }

}
$bus=new Bus();


class sayName{
    private $name;

    function __construct($name){
        $this->name=$name;
    }

    function Name(){
        echo $this->name;
    }
}

$name=new sayName('    Nirob');
$name->Name();


?>