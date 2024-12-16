<?php
include_once '../suppliers/AnswersSupplier.php';
include_once '../models/Answer.php';

class AnswersFactory {

    // property
    private AnswersSupplier $supplier;
    private string $id_question;


    // magic method
    public function __construct($id_question)
    {
        $this->supplier = new AnswersSupplier();
        $this->id_question = $id_question;
    }

    // custom method
    public function getAnswers() : array
    {
        // revois le user fini
        $answers = $this->dataPolish($this->supplier->getThatQuestionAnswersData($this->id_question));

        return $answers;
    }

    private function dataPolish(array $bruteAnswersData) : array
    {
        
        foreach ($bruteAnswersData as $answersDataPolish) {
            $answers[] = $this->hydrateAnswer($answersDataPolish);
        }
        return $answers;
    }

    private function hydrateAnswer(array $dataPolish) : Answer
    {
        
        $answer = new Answer();
        $answer->setId($dataPolish['id']);
        $answer->setResponse($dataPolish['response']);
        $answer->setIsCorrect($dataPolish['isCorrect']);
        $answer->setId_question($dataPolish['id_question']);
        // add answer
        return $answer;
    }
};
?>