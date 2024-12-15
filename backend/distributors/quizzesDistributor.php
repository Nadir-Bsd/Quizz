<?php 
include_once '../factorys/QuizzesFactory.php';

session_start();

$quizzesFactory = new QuizzesFactory($_GET['id']);

$quizzesModel = $quizzesFactory->getQuizzes();


foreach ($quizzesModel as $quiz) {
    $quizzes[] = [
        'id'=>$quiz->getId(),
        'title'=>$quiz->getTitle(),
        'id_category'=>$quiz->getId_category()
    ];
}

$_SESSION['quizzes'] = $quizzes;

header("Location: ../../views/php/quiz.php");
?>