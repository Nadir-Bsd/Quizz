<?php
include_once '../AbstractDbManager.php';

class AnswersSupplier extends abstractDbManager {
   
    // property

    // magic methode
    public function __construct()
    {
        // CONNECTION DB
        parent::__construct();
    }

    // custom methode
    public function getThatQuestionAnswersData(string $id_question) : array
    {
        
        $stmt = $this->pdo->prepare('SELECT * FROM answer WHERE id_question = :id_question');
        $stmt->execute([
            ':id_question'=>$id_question,
        ]);
        
        $brutAnswerData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $brutAnswerData;
    } 
};
?>