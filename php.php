<?php 
$name='Nur Alam Nirob';
$age=20;

printf('My name is %s and I am %d years old',$name,$age);

// for($i=0;$i <=10;$i++){
//     echo $i;
// }

$num=11;

if($num /2 == 0){
    echo "The Number is odd";
}else{
      echo "The Number is even";
}
// echo "<br>";
$number=10;
$evenOrOdd=$number %2 ==0 ? 'Even':"Odd";
printf("The Number %d is %s",$number,$evenOrOdd);


$year=2021;
$leapYear='';

if($year % 400 ==0){
    $leapYear="Yea";
}elseif($year % 100 ==0){
    $leapYear='yea';
}elseif($year % 4 ==0){
    $leapYear='yea';
}else{
    $leapYear="No leap Year";
}
echo $leapYear;
?>