<?php 

// for loop 

$name=['Nirob','Saba','Joj','Ripul','Sara','Ayan'];
$len=count($name);
// echo $len;

for($i=0; $i<$len; $i++){
    echo ' '.$name[$i]. ' ';
}

for($i=1905; $i<=date('Y'); $i++){
    echo $i. PHP_EOL;
}


?>