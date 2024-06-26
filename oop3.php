<?php 

class Fund{

    private $fund;
    public function __construct(){
        $this->fund=0;
    }
    public function addFund($money){
      return  $this->fund +=$money;
    }

    public function deductFund($money){
      return  $this->fund -=$money;
    }

    // public function newFund(){
    //     $this->addFund() - $this->deductFund();
    // }
}

$fund=new Fund();
echo $fund->addFund(500);
echo "<br>";
echo $fund->deductFund(300);
echo "<br>";
// echo $fund->fund;



?>