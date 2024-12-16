<?php
include_once '../AbstractDbManager.php';

class QuestionsSupplier extends abstractDbManager {
   
    // property

    // magic methode
    public function __construct()
    {
        // CONNECTION DB
        parent::__construct();
    }

    // custom methode
    public function getThatQuizQuestionsData(string $id_quiz) : array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM question WHERE id_quiz = :id_quiz');
        $stmt->execute([
            ':id_quiz'=>$id_quiz,
        ]);

        $brutQuestionsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $brutQuestionsData;
    } 
};
?>