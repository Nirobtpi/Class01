<?php


if(isset($_REQUEST['submit'])){
    $number=$_POST['number'];

    if(empty($number)){
        header('location:tempCodeRunnerFile.php?error=Enter Your Number');
    }

    if($number >=80 && $number <= 100){
        echo "You Got A+";
    }elseif($number >=70 && $number < 80){
        echo "You Got A";
    }elseif($number >=50 && $number <70){
        echo "You Got B";
    }elseif($number >=33 && $number <50){
        echo "You Got C";
    }elseif($number <33){
        echo "You Fail In The Exam";
    }
    else{
        echo "Please Enter A valid Number";
    }
    
}


?>