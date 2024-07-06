<?php 
$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1 >= $num2){
    echo "The largest Number Is {$num1}";
}elseif($num1 >= $num3){
     echo "The largest Number Is {$num1}";
}elseif($num2 >= $num3){
     echo "The largest Number Is {$num2}";
}else{
     echo "The largest Number Is {$num3}";
}
echo "<br>";

class Nirob{
    public $name;

    public function __construct($name){
         $this->name=$name;
    }

    public function get_name(){
      return $this->name;
    }
}

$nirob= new Nirob('Nur Alam Nirob');
echo $nirob->get_name();
echo "<br>";
echo "<br>";
class Saba extends Nirob{

}
$saba=new Saba('My Name Is Saba');
echo $saba->get_name();

?>