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


?>