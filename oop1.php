<?php 

// class 
class Cars{
   public $color='black';
   public $name= 'Nirob';
}

$newObj=new Cars;
echo $newObj->color;


class Human{
   public $name;
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

$human=new Human;
echo $human->sayHi();
$human->setName('Nur Alam Nirob');
echo "<br>";
echo $human->sayName();
