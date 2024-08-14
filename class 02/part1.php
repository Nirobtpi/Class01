<?php 

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


?>