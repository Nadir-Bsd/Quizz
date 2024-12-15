<?php 
include_once '../factorys/QuizScoreFactory.php';
// http://localhost:3000/backend/distributors/questionDistributor.php

session_start();

// var_dump($_SESSION['user']);
// distribut le score du user sur se quiz
$quizScoreFactory = new QuizScoreFactory("1", "1");
$quizScoreModel = $quizScoreFactory->getQuizScore();


foreach ($quizScoreModel as $quizScoreObject) {
    $_SESSION['quizScore'] = $quizScoreObject->getQuizScore();
}

header("Location: ../../views/php/question.php");
?>