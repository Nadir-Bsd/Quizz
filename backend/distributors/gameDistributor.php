<?php 
include_once '../factorys/QuizScoreFactory.php';
include_once '../factorys/QuestionFactory.php';
include_once '../factorys/AnswersFactory.php';

session_start();

// NEED USER ID AND QUIZ ID

// faire une game 

// $questionFactory = new QuestionFactory($_GET['id_quiz']);

// $questionsModel = $questionFactory->getQuestions();

// foreach ($questionsModel as $question) {
//     var_dump($question->getTitle());
// }


$answerFactory = new AnswersFactory("1");

$answersModel = $answerFactory->getAnswers();

foreach ($answersModel as $answer) {
    var_dump($answer->getId_question());
}

// // SCORE DU USER SUR LA QUESTION ACTIVE
// // var_dump($_SESSION['user']);
// $quizScoreFactory = new QuizScoreFactory($_GET['id_quiz'], "1");
// $quizScoreModel = $quizScoreFactory->getQuizScore();

// foreach ($quizScoreModel as $quizScoreObject) {
//     var_dump($quizScoreObject->getQuizScore());
//     $_SESSION['quizScore'] = $quizScoreObject->getQuizScore();
// }


// header("Location: ../../views/php/question.php");
?>