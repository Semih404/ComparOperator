<?php 
class Review{
    private $id;
    private $message;
    private $author;
    private $tourOperatorId;

    public function __construct($id, $message, $author, $tourOperatorId){
        $this->id=$id;
        $this->message=$message;
        $this->author=$author;
        $this->tourOperatorId=$tourOperatorId;
    }
    public function getId(){
        return $this->id;
    }
    public function getMessage(){
        return $this->message;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getTourOperatorId(){
        return $this->tourOperatorId;
    }
}
?>