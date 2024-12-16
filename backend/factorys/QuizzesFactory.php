<?php 

include_once '../suppliers/QuizzesSupplier.php';
include_once '../models/Quiz.php';

class QuizzesFactory {

    // Property
    private QuizzesSupplier $supplier;
    private string $id_category;

    // Magic methode
    public function __construct(string $id_category)
    {
        // appel le Supplier
        $this->supplier = new QuizzesSupplier();
        $this->id_category = $id_category;
    }

    // Custom methode
    public function getQuizzes() : array
    {        
        // revois le user fini
        $quizzes = $this->dataPolish($this->supplier->getThatCategoryQuizzesData($this->id_category));
        return $quizzes;
    }

    private function dataPolish(array $bruteQuizzesData) : array
    {
        foreach ($bruteQuizzesData as $quizDataPolish) {
            $quizzes[] = $this->hydrateQuiz($quizDataPolish);
        }
        return $quizzes;
    }

    private function hydrateQuiz(array $dataPolish) : Quiz
    {
        $quiz = new Quiz();
        $quiz->setId($dataPolish['id']);
        $quiz->setTitle($dataPolish['title']);
        $quiz->setId_category($dataPolish['id_category']);
        return $quiz;
    }
};
?>