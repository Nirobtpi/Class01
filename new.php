<?php
class SayHello{
    public $name;

   public function __construct($name){
        $this->name=$name;
    }

    public function hello(){
        return "Hello, How Are You {$this->name}";
    }
}
// $hello=new SayHello('Nirob');
// echo $hello->hello();
class SayHi extends SayHello{
    public $name;
    public function hello(){
        return "My name is {$this->name} I Am Well";
    }
}
// $hi=new SayHi('Nur Alam Nirob');
// echo $hi->hello();

$arr= array(10,20,30,40,50,60,70,80,90,100);
$push=array_push($arr,1000);
print_r($arr);
echo "<br>";


?>