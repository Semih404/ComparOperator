<?php
class manager{
    private $bdd;

    public function __construct($bdd){
        $this->bdd=$bdd;
    }
    public function getAllDestination(){
        $allDestination = [];
        $q= $this->bdd->prepare('SELECT * FROM destinations');
        $q -> execute();
        $donnees = $q -> fetchAll(PDO::FETCH_ASSOC);

        foreach ($donnees as $donnee){
            $allDestination[] = new Destination($donnee);
      }
        return $allDestination;
    }
    public function getOperatorByDestination($id){
        $q = $this->bdd->prepare('SELECT * FROM tour_operators WHERE id = ?');
        $q->execute([$id]);
        $operator = $q->fetch(PDO::FETCH_ASSOC);

        return new TourOperator ($operator);
    }
    public function createReview(Review $review){
        $insertReview = $this->bdd->prepare('INSERT INTO reviews(message, author, id_tour_operator, grade_review) 
        VALUES(:message, :author, :id_tour_operator, :grade_review)');
        $insertReview->bindValue(':message', $review->getMessage(), PDO::PARAM_STR);
        $insertReview->bindValue(':author', $review->getAuthor(), PDO::PARAM_STR);
        $insertReview->bindValue(':id_tour_operator', $review->getTourOperatorId(), PDO::PARAM_INT);
    
        $insertReview->execute();
    }
    public function getReviewByOperatorId($id){
        $allReviews = [];

        $q = $this->bdd->prepare(
          'SELECT * FROM reviews
            WHERE id_tour_operator = ?');
        $q->execute([$id]);
        $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
    
        foreach ($donnees as $donnee){
          $allReviews[] = new Review($donnee);
    
        }
    
        return $allReviews;
    
    }
    public function getAllOperator(){
        $allOperator = [];
        $q = $this->bdd->prepare('SELECT * FROM tour_operators');
        $q ->execute();
        $donnees = $q -> fetchAll(PDO::FETCH_ASSOC);

        foreach ($donnees as $donnee){
        $allOperator[] = new TourOperator($donnee);
        }
        return $allOperator;
    }
    public function updateOperatorToPremium(TourOperator $operator){
        $updateTO = $this->bdd->prepare('UPDATE tour_operators SET name= :name, grade= :grade, link=:link, is_premium = :is_premium');
        $updateTO->bindValue("grade", $operator->getGrade());
        $updateTO->bindValue("is_premium", $operator->getIsPremium());
        $updateTO->bindValue("link", $operator->getLink(), PDO::PARAM_STR);
        $updateTO->bindValue("name", $operator->getName(), PDO::PARAM_STR);
        $updateTO->bindValue("id", $operator->getId(), PDO::PARAM_INT);
        $updateTO->execute();
    }
    public function createTourOperator(TourOperator $tourOperator){
        $q = $this->bdd->prepare('INSERT INTO tour_operators (name, link, is_premium) VALUES(:name, :link, :is_premium)');
        $q->bindValue(':name', $tourOperator->getName());
        $q->bindValue(':link', $tourOperator->getLink());
        $q->bindValue(':is_premium', $tourOperator->getIsPremium());
        $q->execute();
    }
    public function createDestination(Destination $destination){
        $q = $this->bdd->prepare('INSERT INTO destinations (location , price, id_tour_operator) VALUE (:location, :price, :id_tour_operator)');
        $q->bindValue(':location', $destination->getLocation());
        $q->bindValue(':price', $destination->getPrice());
        $q->bindValue(':id_tour_operator', $destination->getIdTourOperator());
        $q->execute();
    
        $destination->hydrate([
          'id' => $this->bdd->lastInsertId()
        ]);
    }
}
?>
