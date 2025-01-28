<?php 
include_once '../factorys/QuizScoreFactory.php';
include_once '../factorys/QuestionFactory.php';

session_start();

// NEED USER ID AND QUIZ ID

// faire une game 

$questionFactory = new QuestionFactory('1');

$questionsModel = $questionFactory->getQuestions();

foreach ($questionsModel as $question) {
    $game = [
        'title'=>$question->getTitle(),
        'answers'=>$question->getAnswers(),
    ];    
    var_dump($game);
}

// SCORE DU USER SUR LA QUESTION ACTIVE
// var_dump($_SESSION['user']);
$quizScoreFactory = new QuizScoreFactory($_GET['id_quiz'], "1");
$quizScoreModel = $quizScoreFactory->getQuizScore();

foreach ($quizScoreModel as $quizScoreObject) {
    var_dump($quizScoreObject->getQuizScore());
    $_SESSION['quizScore'] = $quizScoreObject->getQuizScore();
}


// header("Location: ../../views/php/question.php");
?>