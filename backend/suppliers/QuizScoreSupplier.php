<?php 
include_once '../AbstractDbManager.php';

class QuizScoreSupplier extends abstractDbManager {

    // property

    // magic method
    public function __construct()
    {
        // CONNECTION DB
        parent::__construct();
    }

    // custom method
    public function getThatQuizScoreData(string $id_quiz, string $id_user) : array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM quiz_score WHERE id_quiz = :id_quiz AND id_user = :id_user');
        $stmt->execute([
            ':id_quiz'=>$id_quiz,
            ':id_user'=>$id_user
        ]);

        $brutQuizScoreData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $brutQuizScoreData;
    }


}
?>