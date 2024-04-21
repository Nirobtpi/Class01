<?php 
class Person{
    public $name;
}

$person=new Person();
$person1=new Person();

echo $person->name="Nur Alam Nirob"."<br>";
echo $person->name="Ayan";
echo "<br>";

class Furits{
    private $name;
    private $color;
    private $wight;

    public function setName($name){
       return $this->name=$name;
    }
    public function setColor($color){
        $this->color=$color;
    }
    function setWight($wight){
        $this->wight=$wight;
    }

    function getFutites(){
        return 'This Is An '. $this->name . ' It is '. $this->color ." Its Weght " . $this->wight;
    }
}
$furits=new Furits();
$furits->setName("Apple");
$furits->setColor("Red");
$furits->setWight("1Kg");
echo $furits->getFutites();

?>