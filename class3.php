<?php 

class Vichel{
    public $name;
    public $color;
    public $capacity=500;


    public function __construct($name,$color){
     echo   $this->name=$name. "<br>";
     echo   $this->color=$color."<br>";
    }

    public function  capacity($capacity){
        return $this->capacity=$capacity;
    }

}


// $vichel=new Vichel('Bus','Red');

class Bus extends Vichel{
    public $id;
    public function  capacity($capacity){
        echo parent::capacity($capacity);
        return $this->capacity=$capacity;
    }
}
$bus=new Bus("Bus",'Red');
echo $bus->capacity('50');
// echo $bus->capacity();

?>