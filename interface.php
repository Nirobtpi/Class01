<?php 
namespace Passport;

interface Passport{
    public function name();
    public function nid();
    public function photo();
}

class Nirob implements Passport{
    public function name(){
        echo 'My Name is nirob';
    }
    public function nid(){
        echo 'My Nid Number 1234567';
    }
    public function photo(){

    }
}
$obj2=new Nirob;
$obj2->name();
echo "<br>";
$obj2->nid();
echo "<br>";

interface Animal{
    function makeSound();
    
}

class Cat implements Animal{
    function makeSound()
    {
        echo "Meow <br>";
    }
}
class Dog implements Animal{
    function makeSound()
    {
        echo "Bark <br>";
    }
}
class Mouse implements Animal{
    function makeSound()
    {
        echo "Squeak <br>";
    }
}
$cat=new Cat;
$dog=new Dog;
$mouse=new Mouse;
$animals=array($cat,$dog,$mouse);

foreach($animals as $animal){
    $animal->makeSound();
}


?>