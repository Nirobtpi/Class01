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
        return 'This Is An '. $this->name . ' It is '. $this->color ." Its Wight " . $this->wight;
    }
}
$furits=new Furits();
$furits->setName("Apple");
$furits->setColor("Red");
$furits->setWight("1Kg");
echo $furits->getFutites();
echo "<br>";

class Email{
    private $email;

    function setMail($email){
       return $this->email=$email;
    }
    function getMail(){
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            echo "Enter A Valid Email";
        }else{
            echo strtolower($this->email);
        }
    }
}
$email= new Email();
$email->setMail('nirob@Gmail.com');
echo $email->getMail();
?>