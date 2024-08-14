<?php

class Myname{

    function sayname(){
        echo "My name is saba";
    }
}

$myname=new Myname();
$myname->sayname();
class yourName extends Myname{
    function sayname()
    {
       echo 'My name is Nirob';
    }
}
$yourname=new yourName();
$yourname->sayname();

?>
