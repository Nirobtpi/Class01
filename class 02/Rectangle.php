<?php 
require_once('part1.php');
// session_start();
print_r($user_id);

class Rectangle{
    private $length;
    private $width;

    public function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;
    }
    
    public function getArea(){
        return $this->length * $this->width;
    }
    public function getPerimeter(){
        return 2 *($this->length + $this->width);
    }
}

$retangle=new Rectangle(12,9);
echo $retangle->getArea();
echo $retangle->getPerimeter();


class Circle{
    private $radius;

    public function __construct($radius){
        $this->radius=$radius;
    }

    public function getArea(){
        return pi() * pow($this->radius,2);
    }
}

$circle=new Circle(7);
echo $circle->getArea();


abstract class Shape{
    abstract public function calculateArea();
}

class Triangle extends Shape{
    private $base;
    private $height;

    public function __construct($base,$height){
        $this->base=$base;
        $this->height=$height;
    }

    public function calculateArea(){
            return 0.5 * $this->base * $this->height;
    }
}

$triangle= new Triangle(5,7);
echo "    This is a ". $triangle->calculateArea();


class Rectangles extends Shape{

    private $width;
    private $height;


    public function __construct($width, $height){
        $this->width=$width;
        $this->height=$height;
    }

     public function calculateArea(){
        return $this->width * $this->height;
    }
}

$re=new Rectangles(5,5);
echo $re->calculateArea();


class student{
    private $name;
    private $age;
    private $roll;

    public function __construct($name,$roll,$age){
        $this->name=$name;
        $this->roll=$roll;
        $this->age=$age;
    }

    function getInformation(){
        echo "Name {$this->name} age {$this->age} roll {$this->roll}";
    }
}
echo "\n";
$student=new Student('Nirob',2,25);
$student->getInformation();









