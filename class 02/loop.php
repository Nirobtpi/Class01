<?php 

// for loop 

$names=['Nirob','Saba','Joj','Ripul','Sara','Ayan'];
$len=count($names);
// echo $len;

for($i=0; $i<$len; $i++){
    echo ' '.$names[$i]. ' ';
}

for($i=1905; $i<=date('Y'); $i++){
    echo $i. PHP_EOL;
}

foreach($names as $key=>$name){
    echo 'Key '. $key . ' Value ' . $name . PHP_EOL;
}

for($i=1; $i <=11; $i++){
    for($j=1; $j <=10; $j++){
        echo $i . ' x ' . $j . ' = ' . $i*$j . PHP_EOL;
    }
    echo PHP_EOL;
}


?>