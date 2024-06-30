<?php  

class PrantClass{
    protected $name;

    function __construct($name){
        $this->name=$name;
        $this->sayHi();
        
    }
    function sayHi(){
        echo "Say hi from {$this->name}";
    }
}

class ChildClass extends PrantClass{
    function sayHi(){
        parent::sayHi();
        echo "<br>";
        return "Hi";
    }
}

$cc=new ChildClass('Saba');
// echo $cc->sayHi();

function celsiusToFahrenheit($celsius){
    $fahrenhite=($celsius * 9/5);

    return $celsius . " degrees Celsius is equal to " . $fahrenhite . " degrees Fahrenheit.";
}

echo $result= celsiusToFahrenheit(25);


