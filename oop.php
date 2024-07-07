<?php 

class Cars{
    private $color='red';
    public $weight;
    private $year;

    public function __construct($name,$color,$weight){
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
    }

    function setYear($year){
        $this->year=$year;
    }
    function getYear(){
       return $this->year;
    }

    public function getColor(){
        return $this->color;
    }

    public function weight(){
        $this->weight;
    }
}


$newCar1=new Cars('BMW','Green','200kg');
print_r($newCar1);
// echo $newCar1->getColor();
// $newCar->color='Red';
// $newCar->setYear(2021);
// echo $newCar->getYear();


function sum($a,$b){
    echo $a+$b;
}

sum(10,20);
sum(20,20);



class myName{
     static $name;

    function setName($name){
        self::$name=$name;
    }

    static function getName(){
        return self::$name;
    }
}
$name=new myName();
$name->setName('Nur Alam Nirob');
echo myName::getName();


abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

class Volvo extends Car{
    // public $name; 
    public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
   
}
$new= new Volvo('volvo');
echo $new->intro();
?>