<?php
class TourOperator{
    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $isPremium;

    public function __construct($id, $name, $link, $gradeCount, $gradeTotal, $isPremium){
        $this->id=$id;
        $this->name=$name;
        $this->link=$link;
        $this->gradeCount=$gradeCount;
        $this->gradeTotal=$gradeTotal;
        $this->isPremium=$isPremium;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getLink(){
        return $this->link;
    }
    public function getGradeCount(){
        return $this->gradeCount;
    }
    public function getGradeTotal(){
        return $this->gradeTotal;
    }
    public function getGrade(){

    }
    public function getIsPremium(){
        return $this->isPremium;
    }
}
?>