<?php 

class QuizScore {

    // property
    private string $quizScore;

    // magic methode

    // custom methode
    public function setQuizScore($quizScore) : self 
    {
        $this->quizScore = $quizScore;
        return $this;
    }

    public function getQuizScore() : string 
    {
        return $this->quizScore;
    }
};
?>