<?php 
require('./interface.php');

use Passport\Passport;

class Saba implements Passport{
    public function name(){
        echo "My name is saba";
    }
    public function nid(){

    }
    public function photo(){

    }
}
$saba=new Saba;
echo "<br>";
$saba->name();
?>