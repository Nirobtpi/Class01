<?php  
$celsius = 32;

function celsius_to_fahrenheit($celsius){
    return ($celsius * 9/5) + 32;
}

$fahrenheit = celsius_to_fahrenheit($celsius);

printf("%.2f degrees Celsius is %.2f  degrees Fahrenheit.", $celsius, $fahrenheit);

?>