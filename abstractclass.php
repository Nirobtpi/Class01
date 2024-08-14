<?php

abstract class Shap{
    public $color;


    abstract public function getarea();

    public function getColor(){
      return  $this->color;
    }
}


class Triangle extends Shap{
    public function getarea(){
        echo "85px";
    }
}

$new=new Triangle();
$new->getarea();


?>

<?php 
// $num1=55;
// $num2=75;

// $sum= $num1 + $num2;
// echo $sum;


?>