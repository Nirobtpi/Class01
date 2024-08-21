<?php 

function processStrings($strings){
    $vowels=['a','e','i','o','u'];

    foreach($strings as $string){
        $vowuelsCount=0;

        $lowercase=strtolower($string);

        for($i=0; $i < strlen($lowercase);$i++){
            if(in_array($lowercase[$i],$vowels)){
                $vowuelsCount++;
            }
        }  
        $strRev=strrev($string); 
        echo 'String Revase : ' .$strRev ."\n";
        echo ".......................\n";
        echo 'Vowuel Count ' .$vowuelsCount. "\n";
    }

    
}
$inputStrings = ["hello", "world", "PHP", "programming"];
processStrings($inputStrings);

