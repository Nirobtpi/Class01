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



