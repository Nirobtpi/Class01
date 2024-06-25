<?php 

// class 
class Cars{
   public $color='black';
   public $name= 'Nirob';
}

$newObj=new Cars;
echo $newObj->color;
echo "<br>";


class Human{
   public $name;

   public function __construct($name){
      $this->name=$name;
   }
   function sayHi(){
      echo "Salam";
   }
   public function setName($name){
      return $this->name=$name;
   }
   public function sayName(){
      echo "My Name Is {$this->name}";
   }
}

$human=new Human('Nur Alam Nirob');
echo $human->sayHi();
// $human->setName('Nur Alam Nirob');
echo "<br>";
echo $human->sayName();
echo '<br>';
