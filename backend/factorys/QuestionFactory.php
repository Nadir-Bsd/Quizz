<?php
include_once '../suppliers.php/QuestionSupplier.php';
include_once '../models/Qestion.php';

class QuestionFactory {

    // property
    private QuestionsSupplier $supplier;
    private string $id_quiz;

    // magic method
    public function __construct($id_quiz)
    {
        $this->supplier = new QuestionsSupplier();
        $this->id_quiz = $id_quiz;
    } 

    // custom method
    public function getQuestions() : array
    {
        // revois le user fini
        $questions = $this->dataPolish($this->supplier->getThatQuizQuestionsData($this->id_quiz));
        return $questions;
    }
    
    private function dataPolish(array $bruteQuestionsData) : array
    {
        foreach ($bruteQuestionsData as $questionsDataPolish) {
            $questions[] = $this->hydrateQuestion($questionsDataPolish);
        }
        return $questions;
    }

    private function hydrateQuestion(array $dataPolish) : Question
    {
        $question = new Question();
        $question->setId($dataPolish['id']);
        $question->setTitle($dataPolish['title']);
        $question->setId_quiz($dataPolish['id_quiz']);
        // add answer
        return $question;
    }

};
?>