<?php 
include_once '../suppliers.php/QuizScoreSupplier.php';
include_once '../models/QuizScore.php';

class QuizScoreFactory {
    // propertys
    private QuizScoreSupplier $supplier;
    private string $id_quiz;
    private string $id_user;

    // magic method
    public function __construct($id_quiz, $id_user)
    {
        $this->supplier = new QuizScoreSupplier();
        $this->id_quiz = $id_quiz;
        $this->id_user = $id_user;
    }

    // custom method
    public function getQuizScore() : array
    {
        // revois le user fini
        $quizScore = $this->dataPolish($this->supplier->getThatQuizScoreData($this->id_quiz, $this->id_user));
        return $quizScore;
    }

    private function dataPolish(array $bruteQuizScoreData) : array
    {
        foreach ($bruteQuizScoreData as $quizScoreDataPolish) {
            $quizScore[] = $this->hydrateQuizScore($quizScoreDataPolish);
        }
        return $quizScore;
    }

    private function hydrateQuizScore(array $dataPolish) : QuizScore
    {
        $quizScore = new QuizScore();
        $quizScore->setQuizScore($dataPolish['score']);
        return $quizScore;
    }
}

?>