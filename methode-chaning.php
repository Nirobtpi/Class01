<?php

class StringUtility{
    private $string;
    private $search;

    public function __construct($string){
        $this->string=$string;
    }

    public function search($string){
        $this->search=$string;
        return $this;
    }

    public function replace($string){
        if(!isset($this->search)){
            throw new Exception('Nothing To Replace');
        };

        $this->string= str_replace($this->search,$string,$this->string);
        return $this;
    }
    function print(){
        echo $this->string;
    }
}

$s= new StringUtility('Hello World');
$s->search('World')->replace('Nirob')->print();
echo '<br>';

interface Students{
    function displayName();
}

class Student implements Students{
    private $name;

    public function __construct($name){
        $this->name=$name;
    }

    public function displayName()
    {
        echo 'Hello Form '. $this->name;
    }
}
class StudentManager{
    public function Introduce($student){
        $student->displayName();
    }
}

$st=new Student('Nur Alam Nirob');
$stm=new StudentManager;
$stm->Introduce($st);

echo "<br>";

// interface BaseStroage{
//     public function fileName($fn);
//     public function writeData($data);
//     public function appendData($data);
// }

// class storage implements BaseStroage{
//     private $fn;
//     public function __construct($fn){
//         $this->fileName($fn);
//     }
//     public function fileName($fn){
//         $this->fn=$fn;
//     }
//     public function writeData($data){
//         file_put_contents($this->fn,$data);
//     }

//     public function appendData($data){
//         file_put_contents($this->fn,$data,FILE_APPEND);
//     }
// }

// class DataManager{
//     function saveData($fname,$data){
//         $storage=new storage($fname);
//         $storage->writeData($data);
//     }   
// }
// $dm=new DataManager;
// $dm->saveData('/tmp/abcd.txt','Hello Data');



?>