<?php 

class Cars{
    private $name;
    private $color;

    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    public function getName(){
       return $this->name . PHP_EOL;

    }
    public function getColor(){
       return $this->color;

    }
}

// $car= new Cars('Bmw','Red');
// echo $car->getName();

class Nirob extends Cars{

}
$nirob=new Nirob('Nirob','Green');
echo $nirob->getName();
echo $nirob->getColor();




?>