<?php 

class Book{
    private $title;

    private $availableCopies;

    public function __construct($title,$availableCopies){
        $this->title=$title;
        $this->availableCopies=$availableCopies;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAvailableCopies(){
        return $this->availableCopies;
    }
    public function borrowBook(){
        if($this->availableCopies > 0){
            $this->availableCopies--;
            return true;
        }else{
            return false;
        }
    }
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Man{
    private $name;

    public function __construct($name){
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }

    public function borrow($book){
        if($book->borrowBook()){
              echo "{$this->name} borrowed '{$book->getTitle()}' successfully.\n";
        } else {
            echo "{$this->name} could not borrow '{$book->getTitle()}'. No copies available.\n";
        }
    }
    public function returnBook($book){
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.\n";
    }
}



$book=new Book('Laravel',10);
$member= new Man('Nirob');

 $member->borrow($book). "\n";
 $member->returnBook($book). "\n";

echo $book->getAvailableCopies(). "\n";
// echo $book->borrowBook();
// echo $book->borrowBook();
// echo $book->getAvailableCopies();



?>